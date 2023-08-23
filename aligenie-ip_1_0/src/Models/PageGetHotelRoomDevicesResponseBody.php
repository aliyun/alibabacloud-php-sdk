<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PageGetHotelRoomDevicesResponseBody\page;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PageGetHotelRoomDevicesResponseBody\result;
use AlibabaCloud\Tea\Model;

class PageGetHotelRoomDevicesResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $extentions;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @var page
     */
    public $page;

    /**
     * @example 4EFBDDF4-B19D-526C-8C3D-CD8AB51974EE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @example 200
     *
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'extentions' => 'Extentions',
        'message'    => 'Message',
        'page'       => 'Page',
        'requestId'  => 'RequestId',
        'result'     => 'Result',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extentions) {
            $res['Extentions'] = $this->extentions;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageGetHotelRoomDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extentions'])) {
            $model->extentions = $map['Extentions'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
