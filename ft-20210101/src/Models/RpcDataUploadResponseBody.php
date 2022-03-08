<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20210101\Models;

use AlibabaCloud\Tea\Model;

class RpcDataUploadResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $headers;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var int
     */
    public $totalTime;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'requestId'  => 'RequestId',
        'headers'    => 'headers',
        'params'     => 'params',
        'speed'      => 'speed',
        'totalBytes' => 'totalBytes',
        'totalTime'  => 'totalTime',
        'url'        => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->speed) {
            $res['speed'] = $this->speed;
        }
        if (null !== $this->totalBytes) {
            $res['totalBytes'] = $this->totalBytes;
        }
        if (null !== $this->totalTime) {
            $res['totalTime'] = $this->totalTime;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RpcDataUploadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['speed'])) {
            $model->speed = $map['speed'];
        }
        if (isset($map['totalBytes'])) {
            $model->totalBytes = $map['totalBytes'];
        }
        if (isset($map['totalTime'])) {
            $model->totalTime = $map['totalTime'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
