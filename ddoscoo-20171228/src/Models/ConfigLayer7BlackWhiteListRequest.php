<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer7BlackWhiteListRequest extends Model
{
    /**
     * @example 1.1.1.1
     *
     * @var string[]
     */
    public $blackList;

    /**
     * @description This parameter is required.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1.1.1.1
     *
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'blackList'       => 'BlackList',
        'domain'          => 'Domain',
        'resourceGroupId' => 'ResourceGroupId',
        'whiteList'       => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer7BlackWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = $map['BlackList'];
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }

        return $model;
    }
}
