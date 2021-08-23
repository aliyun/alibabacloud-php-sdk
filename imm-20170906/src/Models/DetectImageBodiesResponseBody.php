<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesResponseBody\bodies;
use AlibabaCloud\Tea\Model;

class DetectImageBodiesResponseBody extends Model
{
    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bodies[]
     */
    public $bodies;
    protected $_name = [
        'imageUri'  => 'ImageUri',
        'requestId' => 'RequestId',
        'bodies'    => 'Bodies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bodies) {
            $res['Bodies'] = [];
            if (null !== $this->bodies && \is_array($this->bodies)) {
                $n = 0;
                foreach ($this->bodies as $item) {
                    $res['Bodies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageBodiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Bodies'])) {
            if (!empty($map['Bodies'])) {
                $model->bodies = [];
                $n             = 0;
                foreach ($map['Bodies'] as $item) {
                    $model->bodies[$n++] = null !== $item ? bodies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
