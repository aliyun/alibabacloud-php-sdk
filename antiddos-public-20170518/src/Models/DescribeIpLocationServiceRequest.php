<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpLocationServiceRequest extends Model
{
    /**
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
