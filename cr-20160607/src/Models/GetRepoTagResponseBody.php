<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20160607\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagResponseBody extends Model
{
    /**
     * @var int
     */
    public $imageUpdate;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $imageSize;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $imageCreate;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'imageUpdate' => 'imageUpdate',
        'imageId'     => 'imageId',
        'requestId'   => 'requestId',
        'digest'      => 'digest',
        'imageSize'   => 'imageSize',
        'tag'         => 'tag',
        'imageCreate' => 'imageCreate',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUpdate) {
            $res['imageUpdate'] = $this->imageUpdate;
        }
        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->digest) {
            $res['digest'] = $this->digest;
        }
        if (null !== $this->imageSize) {
            $res['imageSize'] = $this->imageSize;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->imageCreate) {
            $res['imageCreate'] = $this->imageCreate;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['imageUpdate'])) {
            $model->imageUpdate = $map['imageUpdate'];
        }
        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['digest'])) {
            $model->digest = $map['digest'];
        }
        if (isset($map['imageSize'])) {
            $model->imageSize = $map['imageSize'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['imageCreate'])) {
            $model->imageCreate = $map['imageCreate'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
