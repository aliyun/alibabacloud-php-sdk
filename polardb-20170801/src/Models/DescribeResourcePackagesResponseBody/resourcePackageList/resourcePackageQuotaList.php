<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeResourcePackagesResponseBody\resourcePackageList;

use AlibabaCloud\Dara\Model;

class resourcePackageQuotaList extends Model
{
    /**
     * @var int
     */
    public $allocatedCapacity;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $usedCapacity;
    protected $_name = [
        'allocatedCapacity' => 'AllocatedCapacity',
        'projectId' => 'ProjectId',
        'usedCapacity' => 'UsedCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatedCapacity) {
            $res['AllocatedCapacity'] = $this->allocatedCapacity;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['AllocatedCapacity'])) {
            $model->allocatedCapacity = $map['AllocatedCapacity'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
