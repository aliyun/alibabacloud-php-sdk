<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudResourceAccessedPortsResponseBody extends Model
{
    /**
     * @var int[]
     */
    public $http;
    /**
     * @var int[]
     */
    public $https;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'http'      => 'Http',
        'https'     => 'Https',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->http)) {
            Model::validateArray($this->http);
        }
        if (\is_array($this->https)) {
            Model::validateArray($this->https);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->http) {
            if (\is_array($this->http)) {
                $res['Http'] = [];
                $n1          = 0;
                foreach ($this->http as $item1) {
                    $res['Http'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->https) {
            if (\is_array($this->https)) {
                $res['Https'] = [];
                $n1           = 0;
                foreach ($this->https as $item1) {
                    $res['Https'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Http'])) {
            if (!empty($map['Http'])) {
                $model->http = [];
                $n1          = 0;
                foreach ($map['Http'] as $item1) {
                    $model->http[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Https'])) {
            if (!empty($map['Https'])) {
                $model->https = [];
                $n1           = 0;
                foreach ($map['Https'] as $item1) {
                    $model->https[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
