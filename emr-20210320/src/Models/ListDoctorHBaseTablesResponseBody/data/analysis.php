<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data;

use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @description The regions that have read hotspot issues.
     *
     * @example null
     *
     * @var string[]
     */
    public $readRequestHotspotRegionList;

    /**
     * @description The description of read imbalance.
     *
     * @example read request unbalance is <p class=\"report-detail-topic\">
     *
     * @var string
     */
    public $readRequestUnbalanceSuggestion;

    /**
     * @description The regions that have read/write hotspot issues.
     *
     * @example null
     *
     * @var string[]
     */
    public $requestHotspotRegionList;

    /**
     * @description The description of read/write imbalance.
     *
     * @example read request unbalance is <p class=\"report-detail-topic\">
     *
     * @var string
     */
    public $requestUnbalanceSuggestion;

    /**
     * @description The score of the table.
     *
     * @example 67
     *
     * @var int
     */
    public $tableScore;

    /**
     * @description The regions that have write hotspot issues.
     *
     * @example null
     *
     * @var string[]
     */
    public $writeRequestHotspotRegionList;

    /**
     * @description The description of write imbalance.
     *
     * @example write request unbalance is <p class=\"report-detail-topic\">
     *
     * @var string
     */
    public $writeRequestUnbalanceSuggestion;
    protected $_name = [
        'readRequestHotspotRegionList'    => 'ReadRequestHotspotRegionList',
        'readRequestUnbalanceSuggestion'  => 'ReadRequestUnbalanceSuggestion',
        'requestHotspotRegionList'        => 'RequestHotspotRegionList',
        'requestUnbalanceSuggestion'      => 'RequestUnbalanceSuggestion',
        'tableScore'                      => 'TableScore',
        'writeRequestHotspotRegionList'   => 'WriteRequestHotspotRegionList',
        'writeRequestUnbalanceSuggestion' => 'WriteRequestUnbalanceSuggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readRequestHotspotRegionList) {
            $res['ReadRequestHotspotRegionList'] = $this->readRequestHotspotRegionList;
        }
        if (null !== $this->readRequestUnbalanceSuggestion) {
            $res['ReadRequestUnbalanceSuggestion'] = $this->readRequestUnbalanceSuggestion;
        }
        if (null !== $this->requestHotspotRegionList) {
            $res['RequestHotspotRegionList'] = $this->requestHotspotRegionList;
        }
        if (null !== $this->requestUnbalanceSuggestion) {
            $res['RequestUnbalanceSuggestion'] = $this->requestUnbalanceSuggestion;
        }
        if (null !== $this->tableScore) {
            $res['TableScore'] = $this->tableScore;
        }
        if (null !== $this->writeRequestHotspotRegionList) {
            $res['WriteRequestHotspotRegionList'] = $this->writeRequestHotspotRegionList;
        }
        if (null !== $this->writeRequestUnbalanceSuggestion) {
            $res['WriteRequestUnbalanceSuggestion'] = $this->writeRequestUnbalanceSuggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadRequestHotspotRegionList'])) {
            if (!empty($map['ReadRequestHotspotRegionList'])) {
                $model->readRequestHotspotRegionList = $map['ReadRequestHotspotRegionList'];
            }
        }
        if (isset($map['ReadRequestUnbalanceSuggestion'])) {
            $model->readRequestUnbalanceSuggestion = $map['ReadRequestUnbalanceSuggestion'];
        }
        if (isset($map['RequestHotspotRegionList'])) {
            if (!empty($map['RequestHotspotRegionList'])) {
                $model->requestHotspotRegionList = $map['RequestHotspotRegionList'];
            }
        }
        if (isset($map['RequestUnbalanceSuggestion'])) {
            $model->requestUnbalanceSuggestion = $map['RequestUnbalanceSuggestion'];
        }
        if (isset($map['TableScore'])) {
            $model->tableScore = $map['TableScore'];
        }
        if (isset($map['WriteRequestHotspotRegionList'])) {
            if (!empty($map['WriteRequestHotspotRegionList'])) {
                $model->writeRequestHotspotRegionList = $map['WriteRequestHotspotRegionList'];
            }
        }
        if (isset($map['WriteRequestUnbalanceSuggestion'])) {
            $model->writeRequestUnbalanceSuggestion = $map['WriteRequestUnbalanceSuggestion'];
        }

        return $model;
    }
}
