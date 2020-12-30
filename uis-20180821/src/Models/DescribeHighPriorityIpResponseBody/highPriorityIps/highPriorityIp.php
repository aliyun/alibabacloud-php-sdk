<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpResponseBody\highPriorityIps;

use AlibabaCloud\Tea\Model;

class highPriorityIp extends Model
{
    /**
     * @var string
     */
    public $staticOffAreaId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $dynamicOffAreaId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $boardAreaId;
    protected $_name = [
        'staticOffAreaId'  => 'StaticOffAreaId',
        'domain'           => 'Domain',
        'dynamicOffAreaId' => 'DynamicOffAreaId',
        'state'            => 'State',
        'ip'               => 'Ip',
        'boardAreaId'      => 'BoardAreaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->staticOffAreaId) {
            $res['StaticOffAreaId'] = $this->staticOffAreaId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->dynamicOffAreaId) {
            $res['DynamicOffAreaId'] = $this->dynamicOffAreaId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->boardAreaId) {
            $res['BoardAreaId'] = $this->boardAreaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return highPriorityIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StaticOffAreaId'])) {
            $model->staticOffAreaId = $map['StaticOffAreaId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DynamicOffAreaId'])) {
            $model->dynamicOffAreaId = $map['DynamicOffAreaId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['BoardAreaId'])) {
            $model->boardAreaId = $map['BoardAreaId'];
        }

        return $model;
    }
}
