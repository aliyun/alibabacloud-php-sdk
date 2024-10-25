<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data;

use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @description List of read hotspot regions.
     *
     * @example null
     *
     * @var string[]
     */
    public $readRequestHotspotRegionList;

    /**
     * @description Description of read imbalance.
     *
     * @example read request unbalance is <p class=\\"report-detail-topic\\">表分区总数量为14，分区平均读请求数量为5032486，以下分区存在读请求热点访问：</p><ul class=\\"report-detail-ul\\"><li class=\\".report-detail-li\\">RegionServer： emr-worker-4 Region Id： 4ac818a3ab3fd727490a5b4d4dac7667 读请求数量： 15485664</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： 021b387ae92959def65041e25eade3aa 读请求数量： 7731980</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： d58f33abfe857e5fd0045eaa31c93df8 读请求数量： 7705237</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： 4ca84757a7d0948b8552cfeebefa25a9 读请求数量： 7703492</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-4 Region Id： 1018192dae42995fc75c6d5b5981a9b7 读请求数量： 7695284</li></ul><p style=\\"line-height： 16px; font-size： 16px; margin： 0 auto\\">&nbsp;</p>
     *
     * @var string
     */
    public $readRequestUnbalanceSuggestion;

    /**
     * @description List of read/write hotspot regions.
     *
     * @example null
     *
     * @var string[]
     */
    public $requestHotspotRegionList;

    /**
     * @description Description of read/write imbalance.
     *
     * @example read request unbalance is <p class=\\"report-detail-topic\\">表分区总数量为14，分区平均读请求数量为5032486，以下分区存在读请求热点访问：</p><ul class=\\"report-detail-ul\\"><li class=\\".report-detail-li\\">RegionServer： emr-worker-4 Region Id： 4ac818a3ab3fd727490a5b4d4dac7667 读请求数量： 15485664</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： 021b387ae92959def65041e25eade3aa 读请求数量： 7731980</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： d58f33abfe857e5fd0045eaa31c93df8 读请求数量： 7705237</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： 4ca84757a7d0948b8552cfeebefa25a9 读请求数量： 7703492</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-4 Region Id： 1018192dae42995fc75c6d5b5981a9b7 读请求数量： 7695284</li></ul><p style=\\"line-height： 16px; font-size： 16px; margin： 0 auto\\">&nbsp;</p>
     *
     * @var string
     */
    public $requestUnbalanceSuggestion;

    /**
     * @description Table score.
     *
     * @example 85
     *
     * @var int
     */
    public $tableScore;

    /**
     * @description List of write hotspot regions.
     *
     * @example null
     *
     * @var string[]
     */
    public $writeRequestHotspotRegionList;

    /**
     * @description Description of write imbalance.
     *
     * @example write request unbalance is <p class=\\"report-detail-topic\\">表分区总数量为15，分区平均写请求数量为769954，以下分区存在写请求热点访问：</p><ul class=\\"report-detail-ul\\"><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： 4a938c08750869c47b7a92edeeec2ccc 写请求数量： 2115051</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： b4d21974df92bdf3589e63e4da1fc923 写请求数量： 1592509</li><li class=\\".report-detail-li\\">RegionServer： emr-worker-2 Region Id： 25eb6717470f4ddbabe9187ff0fc0cb3 写请求数量： 1585420</li></ul><p style=\\"line-height： 16px; font-size： 16px; margin： 0 auto\\">&nbsp;</p>
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
