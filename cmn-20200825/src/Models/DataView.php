<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DataView extends Model
{
    /**
     * @var DataViewChart[]
     */
    public $dataViewChartList;

    /**
     * @var string
     */
    public $dataViewDescription;

    /**
     * @var string
     */
    public $dataViewId;

    /**
     * @var string
     */
    public $dataViewName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'dataViewChartList'   => 'DataViewChartList',
        'dataViewDescription' => 'DataViewDescription',
        'dataViewId'          => 'DataViewId',
        'dataViewName'        => 'DataViewName',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataViewChartList) {
            $res['DataViewChartList'] = [];
            if (null !== $this->dataViewChartList && \is_array($this->dataViewChartList)) {
                $n = 0;
                foreach ($this->dataViewChartList as $item) {
                    $res['DataViewChartList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataViewDescription) {
            $res['DataViewDescription'] = $this->dataViewDescription;
        }
        if (null !== $this->dataViewId) {
            $res['DataViewId'] = $this->dataViewId;
        }
        if (null !== $this->dataViewName) {
            $res['DataViewName'] = $this->dataViewName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataViewChartList'])) {
            if (!empty($map['DataViewChartList'])) {
                $model->dataViewChartList = [];
                $n                        = 0;
                foreach ($map['DataViewChartList'] as $item) {
                    $model->dataViewChartList[$n++] = null !== $item ? DataViewChart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataViewDescription'])) {
            $model->dataViewDescription = $map['DataViewDescription'];
        }
        if (isset($map['DataViewId'])) {
            $model->dataViewId = $map['DataViewId'];
        }
        if (isset($map['DataViewName'])) {
            $model->dataViewName = $map['DataViewName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
