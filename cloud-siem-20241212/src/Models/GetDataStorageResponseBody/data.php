<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\normalizationLogStores;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\normalizationLogViews;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\sasLogStores;

class data extends Model
{
    /**
     * @var float
     */
    public $coldStorageUsedCapacity;

    /**
     * @var string
     */
    public $dataStorageRegionId;

    /**
     * @var string
     */
    public $dataStorageRegionPermission;

    /**
     * @var int
     */
    public $dataStorageTotalCapacity;

    /**
     * @var float
     */
    public $dataStorageUsedCapacity;

    /**
     * @var string
     */
    public $dataStorageUsedCapacityDetail;

    /**
     * @var string
     */
    public $logProject;

    /**
     * @var normalizationLogStores[]
     */
    public $normalizationLogStores;

    /**
     * @var normalizationLogViews[]
     */
    public $normalizationLogViews;

    /**
     * @var sasLogStores[]
     */
    public $sasLogStores;
    protected $_name = [
        'coldStorageUsedCapacity' => 'ColdStorageUsedCapacity',
        'dataStorageRegionId' => 'DataStorageRegionId',
        'dataStorageRegionPermission' => 'DataStorageRegionPermission',
        'dataStorageTotalCapacity' => 'DataStorageTotalCapacity',
        'dataStorageUsedCapacity' => 'DataStorageUsedCapacity',
        'dataStorageUsedCapacityDetail' => 'DataStorageUsedCapacityDetail',
        'logProject' => 'LogProject',
        'normalizationLogStores' => 'NormalizationLogStores',
        'normalizationLogViews' => 'NormalizationLogViews',
        'sasLogStores' => 'SasLogStores',
    ];

    public function validate()
    {
        if (\is_array($this->normalizationLogStores)) {
            Model::validateArray($this->normalizationLogStores);
        }
        if (\is_array($this->normalizationLogViews)) {
            Model::validateArray($this->normalizationLogViews);
        }
        if (\is_array($this->sasLogStores)) {
            Model::validateArray($this->sasLogStores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldStorageUsedCapacity) {
            $res['ColdStorageUsedCapacity'] = $this->coldStorageUsedCapacity;
        }

        if (null !== $this->dataStorageRegionId) {
            $res['DataStorageRegionId'] = $this->dataStorageRegionId;
        }

        if (null !== $this->dataStorageRegionPermission) {
            $res['DataStorageRegionPermission'] = $this->dataStorageRegionPermission;
        }

        if (null !== $this->dataStorageTotalCapacity) {
            $res['DataStorageTotalCapacity'] = $this->dataStorageTotalCapacity;
        }

        if (null !== $this->dataStorageUsedCapacity) {
            $res['DataStorageUsedCapacity'] = $this->dataStorageUsedCapacity;
        }

        if (null !== $this->dataStorageUsedCapacityDetail) {
            $res['DataStorageUsedCapacityDetail'] = $this->dataStorageUsedCapacityDetail;
        }

        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }

        if (null !== $this->normalizationLogStores) {
            if (\is_array($this->normalizationLogStores)) {
                $res['NormalizationLogStores'] = [];
                $n1 = 0;
                foreach ($this->normalizationLogStores as $item1) {
                    $res['NormalizationLogStores'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalizationLogViews) {
            if (\is_array($this->normalizationLogViews)) {
                $res['NormalizationLogViews'] = [];
                $n1 = 0;
                foreach ($this->normalizationLogViews as $item1) {
                    $res['NormalizationLogViews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sasLogStores) {
            if (\is_array($this->sasLogStores)) {
                $res['SasLogStores'] = [];
                $n1 = 0;
                foreach ($this->sasLogStores as $item1) {
                    $res['SasLogStores'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ColdStorageUsedCapacity'])) {
            $model->coldStorageUsedCapacity = $map['ColdStorageUsedCapacity'];
        }

        if (isset($map['DataStorageRegionId'])) {
            $model->dataStorageRegionId = $map['DataStorageRegionId'];
        }

        if (isset($map['DataStorageRegionPermission'])) {
            $model->dataStorageRegionPermission = $map['DataStorageRegionPermission'];
        }

        if (isset($map['DataStorageTotalCapacity'])) {
            $model->dataStorageTotalCapacity = $map['DataStorageTotalCapacity'];
        }

        if (isset($map['DataStorageUsedCapacity'])) {
            $model->dataStorageUsedCapacity = $map['DataStorageUsedCapacity'];
        }

        if (isset($map['DataStorageUsedCapacityDetail'])) {
            $model->dataStorageUsedCapacityDetail = $map['DataStorageUsedCapacityDetail'];
        }

        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }

        if (isset($map['NormalizationLogStores'])) {
            if (!empty($map['NormalizationLogStores'])) {
                $model->normalizationLogStores = [];
                $n1 = 0;
                foreach ($map['NormalizationLogStores'] as $item1) {
                    $model->normalizationLogStores[$n1] = normalizationLogStores::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalizationLogViews'])) {
            if (!empty($map['NormalizationLogViews'])) {
                $model->normalizationLogViews = [];
                $n1 = 0;
                foreach ($map['NormalizationLogViews'] as $item1) {
                    $model->normalizationLogViews[$n1] = normalizationLogViews::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SasLogStores'])) {
            if (!empty($map['SasLogStores'])) {
                $model->sasLogStores = [];
                $n1 = 0;
                foreach ($map['SasLogStores'] as $item1) {
                    $model->sasLogStores[$n1] = sasLogStores::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
