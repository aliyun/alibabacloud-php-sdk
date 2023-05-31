<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetInstancesRequest\cloudAssetTypes;
use AlibabaCloud\Tea\Model;

class ListCloudAssetInstancesRequest extends Model
{
    /**
     * @description The cloud service assets.
     *
     * @var cloudAssetTypes[]
     */
    public $cloudAssetTypes;

    /**
     * @description The search conditions for assets. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **name**: the name of the search condition.
     *
     *   **value**: the value of the search condition.
     *
     *   **logicalExp**: the logical relation for multiple search conditions. Valid values:
     *
     *   **OR**: The search conditions use a logical **OR**.
     *   **AND**: The search conditions use a logical **AND**.
     *
     * > You can call the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) operation to query supported search conditions.
     * @example [{\"name\":\"internetIp\",\"value\":\"192.168\",\"logicalExp\":\"OR\"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The number of the page to return.
     *
     * @example 2
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The logical relation for multiple search conditions. Valid values:
     *
     *   **OR**: The search conditions use a logical **OR**.
     *   **AND**: The search conditions use a logical **AND**.
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The number of entries to return on each page. Maximum value: 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssetTypes) {
            $res['CloudAssetTypes'] = [];
            if (null !== $this->cloudAssetTypes && \is_array($this->cloudAssetTypes)) {
                $n = 0;
                foreach ($this->cloudAssetTypes as $item) {
                    $res['CloudAssetTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListCloudAssetInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssetTypes'])) {
            if (!empty($map['CloudAssetTypes'])) {
                $model->cloudAssetTypes = [];
                $n                      = 0;
                foreach ($map['CloudAssetTypes'] as $item) {
                    $model->cloudAssetTypes[$n++] = null !== $item ? cloudAssetTypes::fromMap($item) : $item;
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
