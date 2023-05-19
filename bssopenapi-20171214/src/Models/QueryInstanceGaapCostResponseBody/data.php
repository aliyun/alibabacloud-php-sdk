<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponseBody\data\modules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $hostId;

    /**
     * @var modules
     */
    public $modules;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostId'     => 'HostId',
        'modules'    => 'Modules',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->modules) {
            $res['Modules'] = null !== $this->modules ? $this->modules->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Modules'])) {
            $model->modules = modules::fromMap($map['Modules']);
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
