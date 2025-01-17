<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInfoListResponseBody\imageInfos;

class DescribeImageInfoListResponseBody extends Model
{
    /**
     * @var imageInfos[]
     */
    public $imageInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInfos' => 'ImageInfos',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageInfos)) {
            Model::validateArray($this->imageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageInfos) {
            if (\is_array($this->imageInfos)) {
                $res['ImageInfos'] = [];
                $n1                = 0;
                foreach ($this->imageInfos as $item1) {
                    $res['ImageInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageInfos'])) {
            if (!empty($map['ImageInfos'])) {
                $model->imageInfos = [];
                $n1                = 0;
                foreach ($map['ImageInfos'] as $item1) {
                    $model->imageInfos[$n1++] = imageInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
