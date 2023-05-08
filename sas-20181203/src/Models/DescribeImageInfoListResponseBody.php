<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInfoListResponseBody\imageInfos;
use AlibabaCloud\Tea\Model;

class DescribeImageInfoListResponseBody extends Model
{
    /**
     * @var imageInfos[]
     */
    public $imageInfos;

    /**
     * @example BC3B0DAE-CC0E-59E9-9383-6F060F22****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInfos' => 'ImageInfos',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInfos) {
            $res['ImageInfos'] = [];
            if (null !== $this->imageInfos && \is_array($this->imageInfos)) {
                $n = 0;
                foreach ($this->imageInfos as $item) {
                    $res['ImageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageInfoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInfos'])) {
            if (!empty($map['ImageInfos'])) {
                $model->imageInfos = [];
                $n                 = 0;
                foreach ($map['ImageInfos'] as $item) {
                    $model->imageInfos[$n++] = null !== $item ? imageInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
