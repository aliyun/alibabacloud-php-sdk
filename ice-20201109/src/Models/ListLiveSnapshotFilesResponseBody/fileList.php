<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesResponseBody;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @description The time when the template was created.
     *
     * @example 2022-02-02T22:22:22Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The creation timestamp that is used as an input parameter for a delete API operation.
     *
     * @example 1619503516000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Specifies whether to overlay snapshots.
     *
     * @example true
     *
     * @var bool
     */
    public $isOverlay;

    /**
     * @description The OSS bucket.
     *
     * @example testbucket
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The Object Storage Service (OSS) domain name.
     *
     * @example oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description The location in which the OSS object is stored.
     *
     * @var string
     */
    public $ossObject;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'isOverlay' => 'IsOverlay',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObject' => 'OssObject',
    ];

    public function validate() {}

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
