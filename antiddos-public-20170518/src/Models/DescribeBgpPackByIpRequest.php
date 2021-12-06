<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeBgpPackByIpRequest extends Model
{
    /**
     * @var string
     */
    public $ddosRegionId;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'ddosRegionId' => 'DdosRegionId',
        'ip'           => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpPackByIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
