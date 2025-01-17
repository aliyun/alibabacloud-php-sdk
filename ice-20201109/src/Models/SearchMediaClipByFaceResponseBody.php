<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList;

class SearchMediaClipByFaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var mediaClipList[]
     */
    public $mediaClipList;
    /**
     * @var string
     */
    public $requestId;
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
        'mediaClipList' => 'MediaClipList',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'total'         => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->mediaClipList)) {
            Model::validateArray($this->mediaClipList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->mediaClipList) {
            if (\is_array($this->mediaClipList)) {
                $res['MediaClipList'] = [];
                $n1                   = 0;
                foreach ($this->mediaClipList as $item1) {
                    $res['MediaClipList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['MediaClipList'])) {
            if (!empty($map['MediaClipList'])) {
                $model->mediaClipList = [];
                $n1                   = 0;
                foreach ($map['MediaClipList'] as $item1) {
                    $model->mediaClipList[$n1++] = mediaClipList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
