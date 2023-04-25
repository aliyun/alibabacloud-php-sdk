<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifyCustomCallTaggingRequest extends Model
{
    /**
     * @example ["TagA","TagB"]
     *
     * @var string
     */
    public $callTagNameList;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1312121****
     *
     * @var string
     */
    public $number;
    protected $_name = [
        'callTagNameList' => 'CallTagNameList',
        'description'     => 'Description',
        'instanceId'      => 'InstanceId',
        'number'          => 'Number',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyCustomCallTaggingRequest
     */
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
