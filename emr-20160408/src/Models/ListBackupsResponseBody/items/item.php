<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListBackupsResponseBody\items;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListBackupsResponseBody\items\item\metadataInfo;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var metadataInfo
     */
    public $metadataInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storePath;

    /**
     * @var string
     */
    public $tarFileName;
    protected $_name = [
        'backupPlanId' => 'BackupPlanId',
        'clusterId'    => 'ClusterId',
        'createTime'   => 'CreateTime',
        'id'           => 'Id',
        'md5'          => 'Md5',
        'metadataInfo' => 'MetadataInfo',
        'status'       => 'Status',
        'storePath'    => 'StorePath',
        'tarFileName'  => 'TarFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->metadataInfo) {
            $res['MetadataInfo'] = null !== $this->metadataInfo ? $this->metadataInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storePath) {
            $res['StorePath'] = $this->storePath;
        }
        if (null !== $this->tarFileName) {
            $res['TarFileName'] = $this->tarFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['MetadataInfo'])) {
            $model->metadataInfo = metadataInfo::fromMap($map['MetadataInfo']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorePath'])) {
            $model->storePath = $map['StorePath'];
        }
        if (isset($map['TarFileName'])) {
            $model->tarFileName = $map['TarFileName'];
        }

        return $model;
    }
}
