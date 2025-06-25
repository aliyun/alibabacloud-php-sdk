<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyCloudDrivePermissionRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string[]
     */
    public $downloadEndUserIds;

    /**
     * @var string[]
     */
    public $downloadUploadEndUserIds;

    /**
     * @var string[]
     */
    public $noDownloadNoUploadEndUserIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'downloadEndUserIds' => 'DownloadEndUserIds',
        'downloadUploadEndUserIds' => 'DownloadUploadEndUserIds',
        'noDownloadNoUploadEndUserIds' => 'NoDownloadNoUploadEndUserIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->downloadEndUserIds)) {
            Model::validateArray($this->downloadEndUserIds);
        }
        if (\is_array($this->downloadUploadEndUserIds)) {
            Model::validateArray($this->downloadUploadEndUserIds);
        }
        if (\is_array($this->noDownloadNoUploadEndUserIds)) {
            Model::validateArray($this->noDownloadNoUploadEndUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->downloadEndUserIds) {
            if (\is_array($this->downloadEndUserIds)) {
                $res['DownloadEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->downloadEndUserIds as $item1) {
                    $res['DownloadEndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->downloadUploadEndUserIds) {
            if (\is_array($this->downloadUploadEndUserIds)) {
                $res['DownloadUploadEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->downloadUploadEndUserIds as $item1) {
                    $res['DownloadUploadEndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noDownloadNoUploadEndUserIds) {
            if (\is_array($this->noDownloadNoUploadEndUserIds)) {
                $res['NoDownloadNoUploadEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->noDownloadNoUploadEndUserIds as $item1) {
                    $res['NoDownloadNoUploadEndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['DownloadEndUserIds'])) {
            if (!empty($map['DownloadEndUserIds'])) {
                $model->downloadEndUserIds = [];
                $n1 = 0;
                foreach ($map['DownloadEndUserIds'] as $item1) {
                    $model->downloadEndUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DownloadUploadEndUserIds'])) {
            if (!empty($map['DownloadUploadEndUserIds'])) {
                $model->downloadUploadEndUserIds = [];
                $n1 = 0;
                foreach ($map['DownloadUploadEndUserIds'] as $item1) {
                    $model->downloadUploadEndUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NoDownloadNoUploadEndUserIds'])) {
            if (!empty($map['NoDownloadNoUploadEndUserIds'])) {
                $model->noDownloadNoUploadEndUserIds = [];
                $n1 = 0;
                foreach ($map['NoDownloadNoUploadEndUserIds'] as $item1) {
                    $model->noDownloadNoUploadEndUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
