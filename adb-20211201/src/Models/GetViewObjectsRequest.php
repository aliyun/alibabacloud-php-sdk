<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetViewObjectsRequest extends Model
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
    public $filterViewName;
    /**
     * @var string
     */
    public $filterViewType;
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
    /**
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'DBClusterId'    => 'DBClusterId',
        'filterOwner'    => 'FilterOwner',
        'filterViewName' => 'FilterViewName',
        'filterViewType' => 'FilterViewType',
        'orderBy'        => 'OrderBy',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'schemaName'     => 'SchemaName',
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

        if (null !== $this->filterViewName) {
            $res['FilterViewName'] = $this->filterViewName;
        }

        if (null !== $this->filterViewType) {
            $res['FilterViewType'] = $this->filterViewType;
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

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
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

        if (isset($map['FilterViewName'])) {
            $model->filterViewName = $map['FilterViewName'];
        }

        if (isset($map['FilterViewType'])) {
            $model->filterViewType = $map['FilterViewType'];
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

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        return $model;
    }
}
