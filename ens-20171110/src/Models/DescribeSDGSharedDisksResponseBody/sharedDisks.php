<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGSharedDisksResponseBody;

use AlibabaCloud\Dara\Model;

class sharedDisks extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sdgId;

    /**
     * @var int
     */
    public $sharedNum;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'diskId' => 'DiskId',
        'diskType' => 'DiskType',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
        'sdgId' => 'SdgId',
        'sharedNum' => 'SharedNum',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sdgId) {
            $res['SdgId'] = $this->sdgId;
        }

        if (null !== $this->sharedNum) {
            $res['SharedNum'] = $this->sharedNum;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SdgId'])) {
            $model->sdgId = $map['SdgId'];
        }

        if (isset($map['SharedNum'])) {
            $model->sharedNum = $map['SharedNum'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
