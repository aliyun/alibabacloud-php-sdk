<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudDrivePermissionRequest extends Model
{
    /**
     * @description The ID of the cloud disk in Cloud Drive Service.
     *
     * This parameter is required.
     * @example cn-hangzhou+cds-60911*****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The IDs of the users who have the download permissions.
     *
     * @var string[]
     */
    public $downloadEndUserIds;

    /**
     * @description The IDs of the users who have the upload and download permissions.
     *
     * @var string[]
     */
    public $downloadUploadEndUserIds;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'                    => 'CdsId',
        'downloadEndUserIds'       => 'DownloadEndUserIds',
        'downloadUploadEndUserIds' => 'DownloadUploadEndUserIds',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->downloadEndUserIds) {
            $res['DownloadEndUserIds'] = $this->downloadEndUserIds;
        }
        if (null !== $this->downloadUploadEndUserIds) {
            $res['DownloadUploadEndUserIds'] = $this->downloadUploadEndUserIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudDrivePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['DownloadEndUserIds'])) {
            if (!empty($map['DownloadEndUserIds'])) {
                $model->downloadEndUserIds = $map['DownloadEndUserIds'];
            }
        }
        if (isset($map['DownloadUploadEndUserIds'])) {
            if (!empty($map['DownloadUploadEndUserIds'])) {
                $model->downloadUploadEndUserIds = $map['DownloadUploadEndUserIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
