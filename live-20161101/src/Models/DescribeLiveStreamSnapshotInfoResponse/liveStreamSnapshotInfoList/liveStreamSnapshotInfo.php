<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponse\liveStreamSnapshotInfoList;

use AlibabaCloud\Tea\Model;

class liveStreamSnapshotInfo extends Model
{
    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossObject;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'ossEndpoint' => 'OssEndpoint',
        'ossBucket'   => 'OssBucket',
        'ossObject'   => 'OssObject',
        'createTime'  => 'CreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('ossEndpoint', $this->ossEndpoint, true);
        Model::validateRequired('ossBucket', $this->ossBucket, true);
        Model::validateRequired('ossObject', $this->ossObject, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamSnapshotInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
