<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\auctions;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\head;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\picInfo;

class SearchImageByNameResponseBody extends Model
{
    /**
     * @var auctions[]
     */
    public $auctions;

    /**
     * @var int
     */
    public $code;

    /**
     * @var head
     */
    public $head;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var picInfo
     */
    public $picInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'auctions' => 'Auctions',
        'code' => 'Code',
        'head' => 'Head',
        'msg' => 'Msg',
        'picInfo' => 'PicInfo',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->auctions)) {
            Model::validateArray($this->auctions);
        }
        if (null !== $this->head) {
            $this->head->validate();
        }
        if (null !== $this->picInfo) {
            $this->picInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auctions) {
            if (\is_array($this->auctions)) {
                $res['Auctions'] = [];
                $n1 = 0;
                foreach ($this->auctions as $item1) {
                    $res['Auctions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->head) {
            $res['Head'] = null !== $this->head ? $this->head->toArray($noStream) : $this->head;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->picInfo) {
            $res['PicInfo'] = null !== $this->picInfo ? $this->picInfo->toArray($noStream) : $this->picInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Auctions'])) {
            if (!empty($map['Auctions'])) {
                $model->auctions = [];
                $n1 = 0;
                foreach ($map['Auctions'] as $item1) {
                    $model->auctions[$n1] = auctions::fromMap($item1);
                    ++$n1;
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
