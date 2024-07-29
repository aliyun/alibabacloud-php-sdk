<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupItems extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $groupName;

    /**
     * @example test
     *
     * @var string
     */
    public $groupTag;

    /**
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @example ipv4
     *
     * @var string
     */
    public $securityIPType;

    /**
     * @example mix
     *
     * @var string
     */
    public $whitelistNetType;
    protected $_name = [
        'groupName'        => 'GroupName',
        'groupTag'         => 'GroupTag',
        'securityIPList'   => 'SecurityIPList',
        'securityIPType'   => 'SecurityIPType',
        'whitelistNetType' => 'WhitelistNetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupTag) {
            $res['GroupTag'] = $this->groupTag;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }
        if (null !== $this->whitelistNetType) {
            $res['WhitelistNetType'] = $this->whitelistNetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupTag'])) {
            $model->groupTag = $map['GroupTag'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }
        if (isset($map['WhitelistNetType'])) {
            $model->whitelistNetType = $map['WhitelistNetType'];
        }

        return $model;
    }
}
