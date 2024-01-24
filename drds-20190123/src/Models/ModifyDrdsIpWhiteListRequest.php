<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyDrdsIpWhiteListRequest extends Model
{
    /**
     * @description The name of the DRDS database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the Message Queue for Apache Kafka instance.
     *
     * @example drds****c6vxxyzd
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The attribute of the IP address whitelist group.
     *
     * @var string
     */
    public $groupAttribute;

    /**
     * @description The name of the IP address whitelist group.
     *
     * @example drds_******
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The modified whitelist. Separate multiple IP addresses with commas (,).
     *
     * @example 127.***.***.***,10.***.***.***
     *
     * @var string
     */
    public $ipWhiteList;

    /**
     * @description Specifies the mode. Valid values:
     *
     *   `True`: append modifications
     *   `False`: overwrite modification
     *
     * @example false
     *
     * @var bool
     */
    public $mode;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'groupAttribute' => 'GroupAttribute',
        'groupName'      => 'GroupName',
        'ipWhiteList'    => 'IpWhiteList',
        'mode'           => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->groupAttribute) {
            $res['GroupAttribute'] = $this->groupAttribute;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = $this->ipWhiteList;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['GroupAttribute'])) {
            $model->groupAttribute = $map['GroupAttribute'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = $map['IpWhiteList'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
