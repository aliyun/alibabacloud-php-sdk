<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags;
use AlibabaCloud\Tea\Model;

class ListImagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var osTags[]
     */
    public $osTags;
    protected $_name = [
        'requestId' => 'RequestId',
        'osTags'    => 'OsTags',
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
        if (null !== $this->osTags) {
            $res['OsTags'] = [];
            if (null !== $this->osTags && \is_array($this->osTags)) {
                $n = 0;
                foreach ($this->osTags as $item) {
                    $res['OsTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OsTags'])) {
            if (!empty($map['OsTags'])) {
                $model->osTags = [];
                $n             = 0;
                foreach ($map['OsTags'] as $item) {
                    $model->osTags[$n++] = null !== $item ? osTags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
