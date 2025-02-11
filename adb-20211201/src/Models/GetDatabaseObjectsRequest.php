<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetDatabaseObjectsRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $filterOwner;
    /**
     * @var string
     */
    public $filterSchemaName;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'filterOwner'      => 'FilterOwner',
        'filterSchemaName' => 'FilterSchemaName',
        'orderBy'          => 'OrderBy',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->filterOwner) {
            $res['FilterOwner'] = $this->filterOwner;
        }

        if (null !== $this->filterSchemaName) {
            $res['FilterSchemaName'] = $this->filterSchemaName;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['FilterOwner'])) {
            $model->filterOwner = $map['FilterOwner'];
        }

        if (isset($map['FilterSchemaName'])) {
            $model->filterSchemaName = $map['FilterSchemaName'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
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

        return $model;
    }
}
