<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DataViewChart extends Model
{
    /**
     * @var string
     */
    public $chartType;

    /**
     * @var string
     */
    public $dataViewId;

    /**
     * @var string
     */
    public $dataViewSource;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $grid;
    protected $_name = [
        'chartType'      => 'ChartType',
        'dataViewId'     => 'DataViewId',
        'dataViewSource' => 'DataViewSource',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'grid'           => 'Grid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chartType) {
            $res['ChartType'] = $this->chartType;
        }
        if (null !== $this->dataViewId) {
            $res['DataViewId'] = $this->dataViewId;
        }
        if (null !== $this->dataViewSource) {
            $res['DataViewSource'] = $this->dataViewSource;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->grid) {
            $res['Grid'] = $this->grid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataViewChart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChartType'])) {
            $model->chartType = $map['ChartType'];
        }
        if (isset($map['DataViewId'])) {
            $model->dataViewId = $map['DataViewId'];
        }
        if (isset($map['DataViewSource'])) {
            $model->dataViewSource = $map['DataViewSource'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Grid'])) {
            $model->grid = $map['Grid'];
        }

        return $model;
    }
}
