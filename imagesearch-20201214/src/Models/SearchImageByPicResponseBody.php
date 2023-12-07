<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody\auctions;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody\head;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody\picInfo;
use AlibabaCloud\Tea\Model;

class SearchImageByPicResponseBody extends Model
{
    /**
     * @description The product descriptions returned.
     *
     * @var auctions[]
     */
    public $auctions;

    /**
     * @description The error code returned.
     *
     *   A value of 0 indicates that the operation is successful.
     *   Values other than 0 indicate errors.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The summary of the search result.
     *
     * @var head
     */
    public $head;

    /**
     * @description The error message returned.
     *
     * @example success
     *
     * @var string
     */
    public $msg;

    /**
     * @description The information such as the system-selected category and result of subject recognition.
     *
     * @var picInfo
     */
    public $picInfo;

    /**
     * @description The ID of the request.
     *
     * @example B3137727-7D6E-488C-BA21-0E034C38A879
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'auctions'  => 'Auctions',
        'code'      => 'Code',
        'head'      => 'Head',
        'msg'       => 'Msg',
        'picInfo'   => 'PicInfo',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->head) {
            $res['Head'] = null !== $this->head ? $this->head->toMap() : null;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->picInfo) {
            $res['PicInfo'] = null !== $this->picInfo ? $this->picInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByPicResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Head'])) {
            $model->head = head::fromMap($map['Head']);
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['PicInfo'])) {
            $model->picInfo = picInfo::fromMap($map['PicInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
