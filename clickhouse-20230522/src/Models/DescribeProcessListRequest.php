<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;

class DescribeProcessListRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $initialQueryId;
    /**
     * @var string
     */
    public $initialUser;
    /**
     * @var string
     */
    public $keyword;
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
    public $queryDurationMs;
    /**
     * @var int
     */
    public $queryOrder;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'initialQueryId'  => 'InitialQueryId',
        'initialUser'     => 'InitialUser',
        'keyword'         => 'Keyword',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'queryDurationMs' => 'QueryDurationMs',
        'queryOrder'      => 'QueryOrder',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->initialQueryId) {
            $res['InitialQueryId'] = $this->initialQueryId;
        }

        if (null !== $this->initialUser) {
            $res['InitialUser'] = $this->initialUser;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryDurationMs) {
            $res['QueryDurationMs'] = $this->queryDurationMs;
        }

        if (null !== $this->queryOrder) {
            $res['QueryOrder'] = $this->queryOrder;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['InitialQueryId'])) {
            $model->initialQueryId = $map['InitialQueryId'];
        }

        if (isset($map['InitialUser'])) {
            $model->initialUser = $map['InitialUser'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryDurationMs'])) {
            $model->queryDurationMs = $map['QueryDurationMs'];
        }

        if (isset($map['QueryOrder'])) {
            $model->queryOrder = $map['QueryOrder'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
