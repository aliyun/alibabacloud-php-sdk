<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpLocationServiceRequest extends Model
{
    /**
     * @description The IP address of the asset to query.
     *
     * This parameter is required.
     * @example 121.199.XX.XX
     *
     * @var string
     */
    public $internetIp;
    protected $_name = [
        'internetIp' => 'InternetIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpLocationServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        return $model;
    }
}
