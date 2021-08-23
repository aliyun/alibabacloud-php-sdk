<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetSetResponseBody extends Model
{
    /**
     * @var int
     */
    public $videoCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $videoLength;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $faceCount;

    /**
     * @var string
     */
    public $setName;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'videoCount'  => 'VideoCount',
        'requestId'   => 'RequestId',
        'createTime'  => 'CreateTime',
        'videoLength' => 'VideoLength',
        'setId'       => 'SetId',
        'imageCount'  => 'ImageCount',
        'faceCount'   => 'FaceCount',
        'setName'     => 'SetName',
        'modifyTime'  => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoCount) {
            $res['VideoCount'] = $this->videoCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->videoLength) {
            $res['VideoLength'] = $this->videoLength;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->setName) {
            $res['SetName'] = $this->setName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoCount'])) {
            $model->videoCount = $map['VideoCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VideoLength'])) {
            $model->videoLength = $map['VideoLength'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['SetName'])) {
            $model->setName = $map['SetName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
