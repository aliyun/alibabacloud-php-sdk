<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $faceCount;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $setName;

    /**
     * @var int
     */
    public $videoCount;

    /**
     * @var int
     */
    public $videoLength;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'faceCount'   => 'FaceCount',
        'imageCount'  => 'ImageCount',
        'modifyTime'  => 'ModifyTime',
        'requestId'   => 'RequestId',
        'setId'       => 'SetId',
        'setName'     => 'SetName',
        'videoCount'  => 'VideoCount',
        'videoLength' => 'VideoLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->setName) {
            $res['SetName'] = $this->setName;
        }
        if (null !== $this->videoCount) {
            $res['VideoCount'] = $this->videoCount;
        }
        if (null !== $this->videoLength) {
            $res['VideoLength'] = $this->videoLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['SetName'])) {
            $model->setName = $map['SetName'];
        }
        if (isset($map['VideoCount'])) {
            $model->videoCount = $map['VideoCount'];
        }
        if (isset($map['VideoLength'])) {
            $model->videoLength = $map['VideoLength'];
        }

        return $model;
    }
}
