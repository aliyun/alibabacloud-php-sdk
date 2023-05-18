<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizePurchaseRecordRequest extends Model
{
    /**
     * @var bool
     */
    public $outputMultiOrders;

    /**
     * @example https://img.alicdn.com/tfs/TB1Wo7eXAvoK1RjSZFDXXXY3pXa-2512-3509.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'outputMultiOrders' => 'OutputMultiOrders',
        'url'               => 'Url',
        'body'              => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputMultiOrders) {
            $res['OutputMultiOrders'] = $this->outputMultiOrders;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizePurchaseRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputMultiOrders'])) {
            $model->outputMultiOrders = $map['OutputMultiOrders'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
