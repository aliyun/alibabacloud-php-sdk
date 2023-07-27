<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\BucketAntiDDOSInfo\cnames;
use AlibabaCloud\Tea\Model;

class BucketAntiDDOSInfo extends Model
{
    /**
     * @var int
     */
    public $activeTime;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var cnames
     */
    public $cnames;

    /**
     * @var int
     */
    public $ctime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $mtime;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'activeTime' => 'ActiveTime',
        'bucket'     => 'Bucket',
        'cnames'     => 'Cnames',
        'ctime'      => 'Ctime',
        'instanceId' => 'InstanceId',
        'mtime'      => 'Mtime',
        'owner'      => 'Owner',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->cnames) {
            $res['Cnames'] = null !== $this->cnames ? $this->cnames->toMap() : null;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BucketAntiDDOSInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Cnames'])) {
            $model->cnames = cnames::fromMap($map['Cnames']);
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
