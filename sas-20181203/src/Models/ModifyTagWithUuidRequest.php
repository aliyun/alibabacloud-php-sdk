<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyTagWithUuidRequest extends Model
{
    /**
     * @var string
     */
    public $uuidList;

    /**
     * @var string
     */
    public $tagList;

    /**
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $machineTypes;
    protected $_name = [
        'uuidList'     => 'UuidList',
        'tagList'      => 'TagList',
        'tagId'        => 'TagId',
        'machineTypes' => 'MachineTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTagWithUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }
        if (isset($map['TagList'])) {
            $model->tagList = $map['TagList'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }

        return $model;
    }
}
