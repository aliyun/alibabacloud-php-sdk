<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancesRequest extends Model
{
    /**
     * @description The cluster IDs. Separate multiple cluster IDs with commas (,).
     *
     * @example cc-xxxxx,cx-xxxx
     *
     * @var string
     */
    public $DBInstanceIds;

    /**
     * @description The cluster status.
     *
     * @example active
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The cluster description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-4690g37929****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'DBInstanceIds' => 'DBInstanceIds',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'description' => 'Description',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = $map['DBInstanceIds'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
