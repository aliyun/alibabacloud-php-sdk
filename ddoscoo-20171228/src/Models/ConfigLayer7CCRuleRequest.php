<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer7CCRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example close
     *
     * @var string
     */
    public $act;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description This parameter is required.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @example 5
     *
     * @var int
     */
    public $interval;

    /**
     * @description This parameter is required.
     *
     * @example match
     *
     * @var string
     */
    public $mode;

    /**
     * @description This parameter is required.
     *
     * @example testCcRule1
     *
     * @var string
     */
    public $name;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description This parameter is required.
     *
     * @example /a/b/c
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'act'             => 'Act',
        'count'           => 'Count',
        'domain'          => 'Domain',
        'interval'        => 'Interval',
        'mode'            => 'Mode',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'ttl'             => 'Ttl',
        'uri'             => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->act) {
            $res['Act'] = $this->act;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer7CCRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
