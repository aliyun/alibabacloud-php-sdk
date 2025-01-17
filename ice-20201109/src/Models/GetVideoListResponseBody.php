<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVideoListResponseBody\mediaList;

class GetVideoListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var mediaList[]
     */
    public $mediaList;
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
        'code'      => 'Code',
        'mediaList' => 'MediaList',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'total'     => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->mediaList)) {
            Model::validateArray($this->mediaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->mediaList) {
            if (\is_array($this->mediaList)) {
                $res['MediaList'] = [];
                $n1               = 0;
                foreach ($this->mediaList as $item1) {
                    $res['MediaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['MediaList'])) {
            if (!empty($map['MediaList'])) {
                $model->mediaList = [];
                $n1               = 0;
                foreach ($map['MediaList'] as $item1) {
                    $model->mediaList[$n1++] = mediaList::fromMap($item1);
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
