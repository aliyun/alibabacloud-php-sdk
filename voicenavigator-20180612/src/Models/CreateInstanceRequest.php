<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $concurrency;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nluServiceParamsJson;
    /**
     * @var string
     */
    public $unionInstanceId;
    /**
     * @var string
     */
    public $unionSource;
    protected $_name = [
        'concurrency'          => 'Concurrency',
        'description'          => 'Description',
        'name'                 => 'Name',
        'nluServiceParamsJson' => 'NluServiceParamsJson',
        'unionInstanceId'      => 'UnionInstanceId',
        'unionSource'          => 'UnionSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nluServiceParamsJson) {
            $res['NluServiceParamsJson'] = $this->nluServiceParamsJson;
        }

        if (null !== $this->unionInstanceId) {
            $res['UnionInstanceId'] = $this->unionInstanceId;
        }

        if (null !== $this->unionSource) {
            $res['UnionSource'] = $this->unionSource;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NluServiceParamsJson'])) {
            $model->nluServiceParamsJson = $map['NluServiceParamsJson'];
        }

        if (isset($map['UnionInstanceId'])) {
            $model->unionInstanceId = $map['UnionInstanceId'];
        }

        if (isset($map['UnionSource'])) {
            $model->unionSource = $map['UnionSource'];
        }

        return $model;
    }
}
