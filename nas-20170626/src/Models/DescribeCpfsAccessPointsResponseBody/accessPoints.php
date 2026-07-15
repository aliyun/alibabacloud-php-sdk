<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeCpfsAccessPointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeCpfsAccessPointsResponseBody\accessPoints\rootDirectory;

class accessPoints extends Model
{
    /**
     * @var string
     */
    public $ARN;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var rootDirectory
     */
    public $rootDirectory;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ARN' => 'ARN',
        'accessPointId' => 'AccessPointId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'modifyTime' => 'ModifyTime',
        'regionId' => 'RegionId',
        'rootDirectory' => 'RootDirectory',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->rootDirectory) {
            $this->rootDirectory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ARN) {
            $res['ARN'] = $this->ARN;
        }

        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rootDirectory) {
            $res['RootDirectory'] = null !== $this->rootDirectory ? $this->rootDirectory->toArray($noStream) : $this->rootDirectory;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ARN'])) {
            $model->ARN = $map['ARN'];
        }

        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RootDirectory'])) {
            $model->rootDirectory = rootDirectory::fromMap($map['RootDirectory']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
