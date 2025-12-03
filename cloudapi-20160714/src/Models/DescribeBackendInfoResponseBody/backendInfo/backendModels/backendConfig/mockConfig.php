<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\mockConfig\mockHeaders;

class mockConfig extends Model
{
    /**
     * @var mockHeaders[]
     */
    public $mockHeaders;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var string
     */
    public $mockStatusCode;
    protected $_name = [
        'mockHeaders' => 'MockHeaders',
        'mockResult' => 'MockResult',
        'mockStatusCode' => 'MockStatusCode',
    ];

    public function validate()
    {
        if (\is_array($this->mockHeaders)) {
            Model::validateArray($this->mockHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mockHeaders) {
            if (\is_array($this->mockHeaders)) {
                $res['MockHeaders'] = [];
                $n1 = 0;
                foreach ($this->mockHeaders as $item1) {
                    $res['MockHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }

        if (null !== $this->mockStatusCode) {
            $res['MockStatusCode'] = $this->mockStatusCode;
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
        if (isset($map['MockHeaders'])) {
            if (!empty($map['MockHeaders'])) {
                $model->mockHeaders = [];
                $n1 = 0;
                foreach ($map['MockHeaders'] as $item1) {
                    $model->mockHeaders[$n1] = mockHeaders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }

        if (isset($map['MockStatusCode'])) {
            $model->mockStatusCode = $map['MockStatusCode'];
        }

        return $model;
    }
}
