<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20160607\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagResponseBody extends Model
{
    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $imageCreate;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $imageSize;

    /**
     * @var int
     */
    public $imageUpdate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest'      => 'digest',
        'imageCreate' => 'imageCreate',
        'imageId'     => 'imageId',
        'imageSize'   => 'imageSize',
        'imageUpdate' => 'imageUpdate',
        'requestId'   => 'requestId',
        'status'      => 'status',
        'tag'         => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['digest'] = $this->digest;
        }
        if (null !== $this->imageCreate) {
            $res['imageCreate'] = $this->imageCreate;
        }
        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['imageSize'] = $this->imageSize;
        }
        if (null !== $this->imageUpdate) {
            $res['imageUpdate'] = $this->imageUpdate;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['digest'])) {
            $model->digest = $map['digest'];
        }
        if (isset($map['imageCreate'])) {
            $model->imageCreate = $map['imageCreate'];
        }
        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }
        if (isset($map['imageSize'])) {
            $model->imageSize = $map['imageSize'];
        }
        if (isset($map['imageUpdate'])) {
            $model->imageUpdate = $map['imageUpdate'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
