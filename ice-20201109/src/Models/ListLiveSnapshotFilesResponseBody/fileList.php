<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesResponseBody;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var bool
     */
    public $isOverlay;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
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
