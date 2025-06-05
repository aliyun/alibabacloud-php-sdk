<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class outputTags extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $outputTagDescription;

    /**
     * @var string
     */
    public $outputTagName;

    /**
     * @var string
     */
    public $outputTagValue;
    protected $_name = [
        'id' => 'Id',
        'outputTagDescription' => 'OutputTagDescription',
        'outputTagName' => 'OutputTagName',
        'outputTagValue' => 'OutputTagValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->outputTagDescription) {
            $res['OutputTagDescription'] = $this->outputTagDescription;
        }

        if (null !== $this->outputTagName) {
            $res['OutputTagName'] = $this->outputTagName;
        }

        if (null !== $this->outputTagValue) {
            $res['OutputTagValue'] = $this->outputTagValue;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OutputTagDescription'])) {
            $model->outputTagDescription = $map['OutputTagDescription'];
        }

        if (isset($map['OutputTagName'])) {
            $model->outputTagName = $map['OutputTagName'];
        }

        if (isset($map['OutputTagValue'])) {
            $model->outputTagValue = $map['OutputTagValue'];
        }

        return $model;
    }
}
