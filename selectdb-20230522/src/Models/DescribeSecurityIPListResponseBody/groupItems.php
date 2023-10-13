<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeSecurityIPListResponseBody;

use AlibabaCloud\Tea\Model;

class groupItems extends Model
{
    /**
     * @example ipv4
     *
     * @var string
     */
    public $aecurityIPType;

    /**
     * @example group1
     *
     * @var string
     */
    public $groupName;

    /**
     * @example ""
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
     * @example mix
     *
     * @var string
     */
    public $whitelistNetType;
    protected $_name = [
        'aecurityIPType'   => 'AecurityIPType',
        'groupName'        => 'GroupName',
        'groupTag'         => 'GroupTag',
        'securityIPList'   => 'SecurityIPList',
        'whitelistNetType' => 'WhitelistNetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aecurityIPType) {
            $res['AecurityIPType'] = $this->aecurityIPType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupTag) {
            $res['GroupTag'] = $this->groupTag;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
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
        if (isset($map['AecurityIPType'])) {
            $model->aecurityIPType = $map['AecurityIPType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupTag'])) {
            $model->groupTag = $map['GroupTag'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['WhitelistNetType'])) {
            $model->whitelistNetType = $map['WhitelistNetType'];
        }

        return $model;
    }
}
