<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class RefreshErObjectCachesRequest extends Model
{
    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $mergeDomainName;

    /**
     * @var string
     */
    public $objectPath;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $routineId;
    protected $_name = [
        'force' => 'Force',
        'mergeDomainName' => 'MergeDomainName',
        'objectPath' => 'ObjectPath',
        'objectType' => 'ObjectType',
        'routineId' => 'RoutineId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->mergeDomainName) {
            $res['MergeDomainName'] = $this->mergeDomainName;
        }

        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->routineId) {
            $res['RoutineId'] = $this->routineId;
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
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['MergeDomainName'])) {
            $model->mergeDomainName = $map['MergeDomainName'];
        }

        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['RoutineId'])) {
            $model->routineId = $map['RoutineId'];
        }

        return $model;
    }
}
