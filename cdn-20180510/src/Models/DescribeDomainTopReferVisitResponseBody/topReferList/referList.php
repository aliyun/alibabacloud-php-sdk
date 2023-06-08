<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitResponseBody\topReferList;

use AlibabaCloud\Tea\Model;

class referList extends Model
{
    /**
     * @description The amount of network traffic. Unit: bytes.
     *
     * @example 200
     *
     * @var string
     */
    public $flow;

    /**
     * @description The proportion of network traffic consumed to access the URL.
     *
     * @example 0.5
     *
     * @var float
     */
    public $flowProportion;

    /**
     * @description The URLs to the most frequently requested web pages.
     *
     * @example learn.aliyundoc.com
     *
     * @var string
     */
    public $referDetail;

    /**
     * @description The number of visits to the URL.
     *
     * @example 3
     *
     * @var string
     */
    public $visitData;

    /**
     * @description The proportion of visits to the URL.
     *
     * @example 0.5
     *
     * @var float
     */
    public $visitProportion;
    protected $_name = [
        'flow'            => 'Flow',
        'flowProportion'  => 'FlowProportion',
        'referDetail'     => 'ReferDetail',
        'visitData'       => 'VisitData',
        'visitProportion' => 'VisitProportion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->flowProportion) {
            $res['FlowProportion'] = $this->flowProportion;
        }
        if (null !== $this->referDetail) {
            $res['ReferDetail'] = $this->referDetail;
        }
        if (null !== $this->visitData) {
            $res['VisitData'] = $this->visitData;
        }
        if (null !== $this->visitProportion) {
            $res['VisitProportion'] = $this->visitProportion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['FlowProportion'])) {
            $model->flowProportion = $map['FlowProportion'];
        }
        if (isset($map['ReferDetail'])) {
            $model->referDetail = $map['ReferDetail'];
        }
        if (isset($map['VisitData'])) {
            $model->visitData = $map['VisitData'];
        }
        if (isset($map['VisitProportion'])) {
            $model->visitProportion = $map['VisitProportion'];
        }

        return $model;
    }
}
