<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpResponseBody;

use AlibabaCloud\Dara\Model;

class ddosbgpInfo extends Model
{
    /**
     * @var int
     */
    public $baseThreshold;

    /**
     * @var string
     */
    public $ddosbgpInstanceId;

    /**
     * @var int
     */
    public $elasticThreshold;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'baseThreshold' => 'BaseThreshold',
        'ddosbgpInstanceId' => 'DdosbgpInstanceId',
        'elasticThreshold' => 'ElasticThreshold',
        'expireTime' => 'ExpireTime',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
