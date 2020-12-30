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
    public $status;

    /**
     * @var string
     */
    public $tarFileName;

    /**
     * @var string
     */
    public $storePath;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var metadataInfo
     */
    public $metadataInfo;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'       => 'Status',
        'tarFileName'  => 'TarFileName',
        'storePath'    => 'StorePath',
        'createTime'   => 'CreateTime',
        'md5'          => 'Md5',
        'backupPlanId' => 'BackupPlanId',
        'metadataInfo' => 'MetadataInfo',
        'id'           => 'Id',
        'clusterId'    => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tarFileName) {
            $res['TarFileName'] = $this->tarFileName;
        }
        if (null !== $this->storePath) {
            $res['StorePath'] = $this->storePath;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->metadataInfo) {
            $res['MetadataInfo'] = null !== $this->metadataInfo ? $this->metadataInfo->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TarFileName'])) {
            $model->tarFileName = $map['TarFileName'];
        }
        if (isset($map['StorePath'])) {
            $model->storePath = $map['StorePath'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['MetadataInfo'])) {
            $model->metadataInfo = metadataInfo::fromMap($map['MetadataInfo']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
