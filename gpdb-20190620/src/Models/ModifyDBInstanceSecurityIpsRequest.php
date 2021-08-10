<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSecurityIpsRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $whileList;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'instanceId' => 'InstanceId',
        'groupName'  => 'GroupName',
        'whileList'  => 'WhileList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->whileList) {
            $res['WhileList'] = $this->whileList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceSecurityIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['WhileList'])) {
            $model->whileList = $map['WhileList'];
        }

        return $model;
    }
}
