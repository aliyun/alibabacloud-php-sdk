<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaTasksResponseBody;

use AlibabaCloud\Tea\Model;

class fotaTasks extends Model
{
    /**
     * @description The version of the image. You can call the [DescribeImages](~~188895~~) operation to obtain this parameter.
     *
     * @example 0.0.1-D-20220513.143129
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description This parameter is not available.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $fotaProject;

    /**
     * @description The number of custom images that can be updated to this version.
     *
     * @example 1
     *
     * @var int
     */
    public $pendingCustomImageCount;

    /**
     * @description The number of cloud desktops for which images can be updated to this version.
     *
     * @example 1
     *
     * @var int
     */
    public $pendingDesktopCount;

    /**
     * @description The time when the image version is available for update was published.
     *
     * @example 2022-05-31T04:28:48Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The description of the image version that is available for update.
     *
     * @example test
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description The size of the image update package. Unit: KB.
     *
     * @example 568533470
     *
     * @var int
     */
    public $size;

    /**
     * @description Indicates whether an end user can update the image.
     *
     * Valid values:
     *
     *   valid
     *
     * <!-- -->
     *
     *   invalid
     *
     * <!-- -->
     * @example valid
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the image update task.
     *
     * @example aot-c4khwrp9ocml4****
     *
     * @var string
     */
    public $taskUid;
    protected $_name = [
        'appVersion'              => 'AppVersion',
        'fotaProject'             => 'FotaProject',
        'pendingCustomImageCount' => 'PendingCustomImageCount',
        'pendingDesktopCount'     => 'PendingDesktopCount',
        'publishTime'             => 'PublishTime',
        'releaseNote'             => 'ReleaseNote',
        'size'                    => 'Size',
        'status'                  => 'Status',
        'taskUid'                 => 'TaskUid',
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
        if (null !== $this->pendingCustomImageCount) {
            $res['PendingCustomImageCount'] = $this->pendingCustomImageCount;
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
        if (isset($map['PendingCustomImageCount'])) {
            $model->pendingCustomImageCount = $map['PendingCustomImageCount'];
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
