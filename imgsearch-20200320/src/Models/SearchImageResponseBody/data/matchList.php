<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @example 001
     *
     * @var string
     */
    public $dataId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $entityId;

    /**
     * @example tangyan
     *
     * @var string
     */
    public $extraData;

    /**
     * @example http://vision-console.oss-cn-shanghai.aliyuncs.com/1902352443710590/kv6dvd1ie0c6-ipvnszc8584116.jpg?Expires=1635150265&OSSAccessKeyId=LTAI4Fp1Gt5RzwdEXL3o****&Signature=8rj0%2Bxg%2Bni5NxQAcEQqISX5j1w****
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 10
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'dataId'    => 'DataId',
        'entityId'  => 'EntityId',
        'extraData' => 'ExtraData',
        'imageUrl'  => 'ImageUrl',
        'score'     => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
