<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\auctions;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\head;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\picInfo;
use AlibabaCloud\Tea\Model;

class SearchImageByNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var head
     */
    public $head;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var auctions[]
     */
    public $auctions;

    /**
     * @var int
     */
    public $code;

    /**
     * @var picInfo
     */
    public $picInfo;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'msg'       => 'Msg',
        'head'      => 'Head',
        'requestId' => 'RequestId',
        'auctions'  => 'Auctions',
        'code'      => 'Code',
        'picInfo'   => 'PicInfo',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->head) {
            $res['Head'] = null !== $this->head ? $this->head->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->auctions) {
            $res['Auctions'] = [];
            if (null !== $this->auctions && \is_array($this->auctions)) {
                $n = 0;
                foreach ($this->auctions as $item) {
                    $res['Auctions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->picInfo) {
            $res['PicInfo'] = null !== $this->picInfo ? $this->picInfo->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Head'])) {
            $model->head = head::fromMap($map['Head']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Auctions'])) {
            if (!empty($map['Auctions'])) {
                $model->auctions = [];
                $n               = 0;
                foreach ($map['Auctions'] as $item) {
                    $model->auctions[$n++] = null !== $item ? auctions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['PicInfo'])) {
            $model->picInfo = picInfo::fromMap($map['PicInfo']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
