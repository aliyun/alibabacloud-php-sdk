<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpResponseBody;

use AlibabaCloud\Tea\Model;

class ddosbgpInfo extends Model
{
    /**
     * @description The basic protection threshold of the instance. Unit: Gbit/s.
     *
     * @example 20
     *
     * @var int
     */
    public $baseThreshold;

    /**
     * @description The ID of the instance.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $ddosbgpInstanceId;

    /**
     * @description The burstable protection threshold of the instance. Unit: Gbit/s.
     *
     * @example 301
     *
     * @var int
     */
    public $elasticThreshold;

    /**
     * @description The expiration time of the instance. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1640448000000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The IP address of the asset.
     *
     * @example 118.31.XX.XX
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'baseThreshold'     => 'BaseThreshold',
        'ddosbgpInstanceId' => 'DdosbgpInstanceId',
        'elasticThreshold'  => 'ElasticThreshold',
        'expireTime'        => 'ExpireTime',
        'ip'                => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseThreshold) {
            $res['BaseThreshold'] = $this->baseThreshold;
        }
        if (null !== $this->ddosbgpInstanceId) {
            $res['DdosbgpInstanceId'] = $this->ddosbgpInstanceId;
        }
        if (null !== $this->elasticThreshold) {
            $res['ElasticThreshold'] = $this->elasticThreshold;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddosbgpInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseThreshold'])) {
            $model->baseThreshold = $map['BaseThreshold'];
        }
        if (isset($map['DdosbgpInstanceId'])) {
            $model->ddosbgpInstanceId = $map['DdosbgpInstanceId'];
        }
        if (isset($map['ElasticThreshold'])) {
            $model->elasticThreshold = $map['ElasticThreshold'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
