<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $chatbotInstanceId;

    /**
     * @var string
     */
    public $nluServiceType;

    /**
     * @var string
     */
    public $chatbotName;
    protected $_name = [
        'name'              => 'Name',
        'description'       => 'Description',
        'concurrency'       => 'Concurrency',
        'chatbotInstanceId' => 'ChatbotInstanceId',
        'nluServiceType'    => 'NluServiceType',
        'chatbotName'       => 'ChatbotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->chatbotInstanceId) {
            $res['ChatbotInstanceId'] = $this->chatbotInstanceId;
        }
        if (null !== $this->nluServiceType) {
            $res['NluServiceType'] = $this->nluServiceType;
        }
        if (null !== $this->chatbotName) {
            $res['ChatbotName'] = $this->chatbotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ChatbotInstanceId'])) {
            $model->chatbotInstanceId = $map['ChatbotInstanceId'];
        }
        if (isset($map['NluServiceType'])) {
            $model->nluServiceType = $map['NluServiceType'];
        }
        if (isset($map['ChatbotName'])) {
            $model->chatbotName = $map['ChatbotName'];
        }

        return $model;
    }
}
