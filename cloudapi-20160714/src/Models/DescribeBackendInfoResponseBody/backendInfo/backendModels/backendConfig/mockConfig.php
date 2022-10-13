<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\mockConfig\mockHeaders;
use AlibabaCloud\Tea\Model;

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
        'mockHeaders'    => 'MockHeaders',
        'mockResult'     => 'MockResult',
        'mockStatusCode' => 'MockStatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mockHeaders) {
            $res['MockHeaders'] = [];
            if (null !== $this->mockHeaders && \is_array($this->mockHeaders)) {
                $n = 0;
                foreach ($this->mockHeaders as $item) {
                    $res['MockHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return mockConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MockHeaders'])) {
            if (!empty($map['MockHeaders'])) {
                $model->mockHeaders = [];
                $n                  = 0;
                foreach ($map['MockHeaders'] as $item) {
                    $model->mockHeaders[$n++] = null !== $item ? mockHeaders::fromMap($item) : $item;
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
