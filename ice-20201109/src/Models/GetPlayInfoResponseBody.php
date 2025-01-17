<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody\mediaBase;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody\playInfoList;

class GetPlayInfoResponseBody extends Model
{
    /**
     * @var mediaBase
     */
    public $mediaBase;
    /**
     * @var playInfoList[]
     */
    public $playInfoList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaBase'    => 'MediaBase',
        'playInfoList' => 'PlayInfoList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaBase) {
            $this->mediaBase->validate();
        }
        if (\is_array($this->playInfoList)) {
            Model::validateArray($this->playInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaBase) {
            $res['MediaBase'] = null !== $this->mediaBase ? $this->mediaBase->toArray($noStream) : $this->mediaBase;
        }

        if (null !== $this->playInfoList) {
            if (\is_array($this->playInfoList)) {
                $res['PlayInfoList'] = [];
                $n1                  = 0;
                foreach ($this->playInfoList as $item1) {
                    $res['PlayInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaBase'])) {
            $model->mediaBase = mediaBase::fromMap($map['MediaBase']);
        }

        if (isset($map['PlayInfoList'])) {
            if (!empty($map['PlayInfoList'])) {
                $model->playInfoList = [];
                $n1                  = 0;
                foreach ($map['PlayInfoList'] as $item1) {
                    $model->playInfoList[$n1++] = playInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
