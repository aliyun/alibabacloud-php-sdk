<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;

class SearchMediaResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var mediaInfoList[]
     */
    public $mediaInfoList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scrollToken;
    /**
     * @var string
     */
    public $success;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code'          => 'Code',
        'mediaInfoList' => 'MediaInfoList',
        'requestId'     => 'RequestId',
        'scrollToken'   => 'ScrollToken',
        'success'       => 'Success',
        'total'         => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->mediaInfoList)) {
            Model::validateArray($this->mediaInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->mediaInfoList) {
            if (\is_array($this->mediaInfoList)) {
                $res['MediaInfoList'] = [];
                $n1                   = 0;
                foreach ($this->mediaInfoList as $item1) {
                    $res['MediaInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['MediaInfoList'])) {
            if (!empty($map['MediaInfoList'])) {
                $model->mediaInfoList = [];
                $n1                   = 0;
                foreach ($map['MediaInfoList'] as $item1) {
                    $model->mediaInfoList[$n1++] = mediaInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
