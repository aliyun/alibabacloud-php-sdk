<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyTagWithUuidRequest extends Model
{
    /**
     * @var string
     */
    public $machineTypes;
    /**
     * @var string
     */
    public $tagId;
    /**
     * @var string
     */
    public $tagList;
    /**
     * @var string
     */
    public $target;
    /**
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'machineTypes' => 'MachineTypes',
        'tagId'        => 'TagId',
        'tagList'      => 'TagList',
        'target'       => 'Target',
        'uuidList'     => 'UuidList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
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
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        if (isset($map['TagList'])) {
            $model->tagList = $map['TagList'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}
