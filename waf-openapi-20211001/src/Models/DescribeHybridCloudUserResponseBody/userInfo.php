<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserResponseBody;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @example 80,8080
     *
     * @var string
     */
    public $httpPorts;

    /**
     * @example 8443,443
     *
     * @var string
     */
    public $httpsPorts;
    protected $_name = [
        'httpPorts'  => 'HttpPorts',
        'httpsPorts' => 'HttpsPorts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpPorts) {
            $res['HttpPorts'] = $this->httpPorts;
        }
        if (null !== $this->httpsPorts) {
            $res['HttpsPorts'] = $this->httpsPorts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpPorts'])) {
            $model->httpPorts = $map['HttpPorts'];
        }
        if (isset($map['HttpsPorts'])) {
            $model->httpsPorts = $map['HttpsPorts'];
        }

        return $model;
    }
}
