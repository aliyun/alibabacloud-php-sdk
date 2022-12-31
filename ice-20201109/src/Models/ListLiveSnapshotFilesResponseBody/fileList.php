<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesResponseBody;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @example 2022-02-02T22:22:22Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1619503516000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOverlay;

    /**
     * @description OSS bucket。
     *
     * @example testbucket
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @example oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @example snapshot/****a046-263c-3560-978a-fb287782****\/1660638613798.jpg
     *
     * @var string
     */
    public $ossObject;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'isOverlay'       => 'IsOverlay',
        'ossBucket'       => 'OssBucket',
        'ossEndpoint'     => 'OssEndpoint',
        'ossObject'       => 'OssObject',
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
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->isOverlay) {
            $res['IsOverlay'] = $this->isOverlay;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['IsOverlay'])) {
            $model->isOverlay = $map['IsOverlay'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }

        return $model;
    }
}
