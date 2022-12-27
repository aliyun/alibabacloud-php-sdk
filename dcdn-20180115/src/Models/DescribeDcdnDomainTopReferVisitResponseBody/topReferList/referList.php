<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopReferVisitResponseBody\topReferList;

use AlibabaCloud\Tea\Model;

class referList extends Model
{
    /**
     * @example 460486880
     *
     * @var string
     */
    public $flow;

    /**
     * @example 0.35
     *
     * @var float
     */
    public $flowProportion;

    /**
     * @example 192.168.0.1
     *
     * @var string
     */
    public $referDetail;

    /**
     * @example 229567
     *
     * @var string
     */
    public $visitData;

    /**
     * @example 0.35
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
