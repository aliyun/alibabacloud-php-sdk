<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody\imageCaches;
use AlibabaCloud\Tea\Model;

class DescribeImageCachesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var imageCaches[]
     */
    public $imageCaches;
    protected $_name = [
        'requestId'   => 'RequestId',
        'imageCaches' => 'ImageCaches',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageCaches) {
            $res['ImageCaches'] = [];
            if (null !== $this->imageCaches && \is_array($this->imageCaches)) {
                $n = 0;
                foreach ($this->imageCaches as $item) {
                    $res['ImageCaches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageCaches'])) {
            if (!empty($map['ImageCaches'])) {
                $model->imageCaches = [];
                $n                  = 0;
                foreach ($map['ImageCaches'] as $item) {
                    $model->imageCaches[$n++] = null !== $item ? imageCaches::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
