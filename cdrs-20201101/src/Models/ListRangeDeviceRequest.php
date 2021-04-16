<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListRangeDeviceRequest extends Model
{
    /**
     * @var int
     */
    public $radius;

    /**
     * @var string
     */
    public $dataSourceId;

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
    public $corpId;
    protected $_name = [
        'radius'       => 'Radius',
        'dataSourceId' => 'DataSourceId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'corpId'       => 'CorpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->radius) {
            $res['Radius'] = $this->radius;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRangeDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Radius'])) {
            $model->radius = $map['Radius'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        return $model;
    }
}
