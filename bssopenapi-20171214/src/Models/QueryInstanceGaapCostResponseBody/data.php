<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponseBody\data\modules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var modules
     */
    public $modules;
    protected $_name = [
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'hostId'     => 'HostId',
        'modules'    => 'Modules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->modules) {
            $res['Modules'] = null !== $this->modules ? $this->modules->toMap() : null;
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Modules'])) {
            $model->modules = modules::fromMap($map['Modules']);
        }

        return $model;
    }
}
