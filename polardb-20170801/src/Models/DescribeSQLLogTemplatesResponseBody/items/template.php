<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSQLLogTemplatesResponseBody\items;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var int
     */
    public $totalConsume;

    /**
     * @var float
     */
    public $avgUpdateRows;

    /**
     * @var int
     */
    public $totalScanRows;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $templateHash;

    /**
     * @var int
     */
    public $itemID;

    /**
     * @var int
     */
    public $totalUpdateRows;

    /**
     * @var int
     */
    public $totalCounts;

    /**
     * @var float
     */
    public $avgScanRows;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var float
     */
    public $avgConsume;
    protected $_name = [
        'totalConsume'    => 'TotalConsume',
        'avgUpdateRows'   => 'AvgUpdateRows',
        'totalScanRows'   => 'TotalScanRows',
        'template'        => 'Template',
        'templateHash'    => 'TemplateHash',
        'itemID'          => 'ItemID',
        'totalUpdateRows' => 'TotalUpdateRows',
        'totalCounts'     => 'TotalCounts',
        'avgScanRows'     => 'AvgScanRows',
        'sqlType'         => 'SqlType',
        'avgConsume'      => 'AvgConsume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalConsume) {
            $res['TotalConsume'] = $this->totalConsume;
        }
        if (null !== $this->avgUpdateRows) {
            $res['AvgUpdateRows'] = $this->avgUpdateRows;
        }
        if (null !== $this->totalScanRows) {
            $res['TotalScanRows'] = $this->totalScanRows;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateHash) {
            $res['TemplateHash'] = $this->templateHash;
        }
        if (null !== $this->itemID) {
            $res['ItemID'] = $this->itemID;
        }
        if (null !== $this->totalUpdateRows) {
            $res['TotalUpdateRows'] = $this->totalUpdateRows;
        }
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }
        if (null !== $this->avgScanRows) {
            $res['AvgScanRows'] = $this->avgScanRows;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->avgConsume) {
            $res['AvgConsume'] = $this->avgConsume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalConsume'])) {
            $model->totalConsume = $map['TotalConsume'];
        }
        if (isset($map['AvgUpdateRows'])) {
            $model->avgUpdateRows = $map['AvgUpdateRows'];
        }
        if (isset($map['TotalScanRows'])) {
            $model->totalScanRows = $map['TotalScanRows'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateHash'])) {
            $model->templateHash = $map['TemplateHash'];
        }
        if (isset($map['ItemID'])) {
            $model->itemID = $map['ItemID'];
        }
        if (isset($map['TotalUpdateRows'])) {
            $model->totalUpdateRows = $map['TotalUpdateRows'];
        }
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }
        if (isset($map['AvgScanRows'])) {
            $model->avgScanRows = $map['AvgScanRows'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['AvgConsume'])) {
            $model->avgConsume = $map['AvgConsume'];
        }

        return $model;
    }
}
