<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribePlayQoeListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $beginTs;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var int
     */
    public $endTs;

    /**
     * @var string
     */
    public $itemConfigs;

    /**
     * @var string
     */
    public $metricTypesShrink;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $os;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'appName'           => 'AppName',
        'beginTs'           => 'BeginTs',
        'definition'        => 'Definition',
        'endTs'             => 'EndTs',
        'itemConfigs'       => 'ItemConfigs',
        'metricTypesShrink' => 'MetricTypes',
        'network'           => 'Network',
        'orderName'         => 'OrderName',
        'orderType'         => 'OrderType',
        'os'                => 'Os',
        'pageNo'            => 'PageNo',
        'pageSize'          => 'PageSize',
        'terminalType'      => 'TerminalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->beginTs) {
            $res['BeginTs'] = $this->beginTs;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->itemConfigs) {
            $res['ItemConfigs'] = $this->itemConfigs;
        }
        if (null !== $this->metricTypesShrink) {
            $res['MetricTypes'] = $this->metricTypesShrink;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayQoeListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BeginTs'])) {
            $model->beginTs = $map['BeginTs'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['ItemConfigs'])) {
            $model->itemConfigs = $map['ItemConfigs'];
        }
        if (isset($map['MetricTypes'])) {
            $model->metricTypesShrink = $map['MetricTypes'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
