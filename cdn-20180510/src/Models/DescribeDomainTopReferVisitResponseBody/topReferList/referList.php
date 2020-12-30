<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitResponseBody\topReferList;

use AlibabaCloud\Tea\Model;

class referList extends Model
{
    /**
     * @var string
     */
    public $visitData;

    /**
     * @var string
     */
    public $referDetail;

    /**
     * @var float
     */
    public $visitProportion;

    /**
     * @var string
     */
    public $flow;

    /**
     * @var float
     */
    public $flowProportion;
    protected $_name = [
        'visitData'       => 'VisitData',
        'referDetail'     => 'ReferDetail',
        'visitProportion' => 'VisitProportion',
        'flow'            => 'Flow',
        'flowProportion'  => 'FlowProportion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->visitData) {
            $res['VisitData'] = $this->visitData;
        }
        if (null !== $this->referDetail) {
            $res['ReferDetail'] = $this->referDetail;
        }
        if (null !== $this->visitProportion) {
            $res['VisitProportion'] = $this->visitProportion;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->flowProportion) {
            $res['FlowProportion'] = $this->flowProportion;
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
        if (isset($map['VisitData'])) {
            $model->visitData = $map['VisitData'];
        }
        if (isset($map['ReferDetail'])) {
            $model->referDetail = $map['ReferDetail'];
        }
        if (isset($map['VisitProportion'])) {
            $model->visitProportion = $map['VisitProportion'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['FlowProportion'])) {
            $model->flowProportion = $map['FlowProportion'];
        }

        return $model;
    }
}
