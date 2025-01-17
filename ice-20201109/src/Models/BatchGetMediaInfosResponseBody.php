<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos;

class BatchGetMediaInfosResponseBody extends Model
{
    /**
     * @var mediaInfos[]
     */
    public $mediaInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaInfos' => 'MediaInfos',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->mediaInfos)) {
            Model::validateArray($this->mediaInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaInfos) {
            if (\is_array($this->mediaInfos)) {
                $res['MediaInfos'] = [];
                $n1                = 0;
                foreach ($this->mediaInfos as $item1) {
                    $res['MediaInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaInfos'])) {
            if (!empty($map['MediaInfos'])) {
                $model->mediaInfos = [];
                $n1                = 0;
                foreach ($map['MediaInfos'] as $item1) {
                    $model->mediaInfos[$n1++] = mediaInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
