<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserResponseBody;

use AlibabaCloud\Dara\Model;

class userInfo extends Model
{
    /**
     * @var string
     */
    public $httpPorts;
    /**
     * @var string
     */
    public $httpsPorts;
    protected $_name = [
        'httpPorts'  => 'HttpPorts',
        'httpsPorts' => 'HttpsPorts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
