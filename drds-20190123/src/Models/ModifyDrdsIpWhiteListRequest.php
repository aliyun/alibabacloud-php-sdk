<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyDrdsIpWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $ipWhiteList;

    /**
     * @var bool
     */
    public $mode;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupAttribute;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'dbName'         => 'DbName',
        'ipWhiteList'    => 'IpWhiteList',
        'mode'           => 'Mode',
        'groupName'      => 'GroupName',
        'groupAttribute' => 'GroupAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = $this->ipWhiteList;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupAttribute) {
            $res['GroupAttribute'] = $this->groupAttribute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDrdsIpWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = $map['IpWhiteList'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupAttribute'])) {
            $model->groupAttribute = $map['GroupAttribute'];
        }

        return $model;
    }
}
