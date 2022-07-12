<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaTasksResponseBody;

use AlibabaCloud\Tea\Model;

class fotaTasks extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $fotaProject;

    /**
     * @var int
     */
    public $pendingDesktopCount;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskUid;
    protected $_name = [
        'appVersion'          => 'AppVersion',
        'fotaProject'         => 'FotaProject',
        'pendingDesktopCount' => 'PendingDesktopCount',
        'publishTime'         => 'PublishTime',
        'releaseNote'         => 'ReleaseNote',
        'size'                => 'Size',
        'status'              => 'Status',
        'taskUid'             => 'TaskUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->fotaProject) {
            $res['FotaProject'] = $this->fotaProject;
        }
        if (null !== $this->pendingDesktopCount) {
            $res['PendingDesktopCount'] = $this->pendingDesktopCount;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskUid) {
            $res['TaskUid'] = $this->taskUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fotaTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['FotaProject'])) {
            $model->fotaProject = $map['FotaProject'];
        }
        if (isset($map['PendingDesktopCount'])) {
            $model->pendingDesktopCount = $map['PendingDesktopCount'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskUid'])) {
            $model->taskUid = $map['TaskUid'];
        }

        return $model;
    }
}
