<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetInstancesRequest\cloudAssetTypes;

class ListCloudAssetInstancesRequest extends Model
{
    /**
     * @var cloudAssetTypes[]
     */
    public $cloudAssetTypes;
    /**
     * @var string
     */
    public $criteria;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $logicalExp;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cloudAssetTypes' => 'CloudAssetTypes',
        'criteria'        => 'Criteria',
        'currentPage'     => 'CurrentPage',
        'logicalExp'      => 'LogicalExp',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->cloudAssetTypes)) {
            Model::validateArray($this->cloudAssetTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAssetTypes) {
            if (\is_array($this->cloudAssetTypes)) {
                $res['CloudAssetTypes'] = [];
                $n1                     = 0;
                foreach ($this->cloudAssetTypes as $item1) {
                    $res['CloudAssetTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CloudAssetTypes'])) {
            if (!empty($map['CloudAssetTypes'])) {
                $model->cloudAssetTypes = [];
                $n1                     = 0;
                foreach ($map['CloudAssetTypes'] as $item1) {
                    $model->cloudAssetTypes[$n1++] = cloudAssetTypes::fromMap($item1);
                }
            }
        }

        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
