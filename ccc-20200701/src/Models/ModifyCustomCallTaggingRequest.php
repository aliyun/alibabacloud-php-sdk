<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustomCallTaggingRequest extends Model
{
    /**
     * @var string
     */
    public $callTagNameList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $number;
    protected $_name = [
        'callTagNameList' => 'CallTagNameList',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'number' => 'Number',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callTagNameList) {
            $res['CallTagNameList'] = $this->callTagNameList;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
        if (isset($map['CallTagNameList'])) {
            $model->callTagNameList = $map['CallTagNameList'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
