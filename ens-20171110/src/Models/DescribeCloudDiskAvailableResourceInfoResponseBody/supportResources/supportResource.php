<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources\supportResource\ability;

class supportResource extends Model
{
    /**
     * @var ability
     */
    public $ability;

    /**
     * @var int
     */
    public $canBuyCount;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $defaultDiskSize;

    /**
     * @var int
     */
    public $diskMaxSize;

    /**
     * @var int
     */
    public $diskMinSize;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $ensRegionName;
    protected $_name = [
        'ability' => 'Ability',
        'canBuyCount' => 'CanBuyCount',
        'category' => 'Category',
        'defaultDiskSize' => 'DefaultDiskSize',
        'diskMaxSize' => 'DiskMaxSize',
        'diskMinSize' => 'DiskMinSize',
        'ensRegionId' => 'EnsRegionId',
        'ensRegionName' => 'EnsRegionName',
    ];

    public function validate()
    {
        if (null !== $this->ability) {
            $this->ability->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ability) {
            $res['Ability'] = null !== $this->ability ? $this->ability->toArray($noStream) : $this->ability;
        }

        if (null !== $this->canBuyCount) {
            $res['CanBuyCount'] = $this->canBuyCount;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->defaultDiskSize) {
            $res['DefaultDiskSize'] = $this->defaultDiskSize;
        }

        if (null !== $this->diskMaxSize) {
            $res['DiskMaxSize'] = $this->diskMaxSize;
        }

        if (null !== $this->diskMinSize) {
            $res['DiskMinSize'] = $this->diskMinSize;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->ensRegionName) {
            $res['EnsRegionName'] = $this->ensRegionName;
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
        if (isset($map['Ability'])) {
            $model->ability = ability::fromMap($map['Ability']);
        }

        if (isset($map['CanBuyCount'])) {
            $model->canBuyCount = $map['CanBuyCount'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['DefaultDiskSize'])) {
            $model->defaultDiskSize = $map['DefaultDiskSize'];
        }

        if (isset($map['DiskMaxSize'])) {
            $model->diskMaxSize = $map['DiskMaxSize'];
        }

        if (isset($map['DiskMinSize'])) {
            $model->diskMinSize = $map['DiskMinSize'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnsRegionName'])) {
            $model->ensRegionName = $map['EnsRegionName'];
        }

        return $model;
    }
}
