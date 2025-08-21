<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcTopUrlVisitResponseBody\url400List;

use AlibabaCloud\Dara\Model;

class urlList extends Model
{
    /**
     * @var string
     */
    public $flow;

    /**
     * @var float
     */
    public $flowProportion;

    /**
     * @var string
     */
    public $urlDetail;

    /**
     * @var string
     */
    public $visitData;

    /**
     * @var float
     */
    public $visitProportion;
    protected $_name = [
        'flow' => 'Flow',
        'flowProportion' => 'FlowProportion',
        'urlDetail' => 'UrlDetail',
        'visitData' => 'VisitData',
        'visitProportion' => 'VisitProportion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }

        if (null !== $this->flowProportion) {
            $res['FlowProportion'] = $this->flowProportion;
        }

        if (null !== $this->urlDetail) {
            $res['UrlDetail'] = $this->urlDetail;
        }

        if (null !== $this->visitData) {
            $res['VisitData'] = $this->visitData;
        }

        if (null !== $this->visitProportion) {
            $res['VisitProportion'] = $this->visitProportion;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }

        if (isset($map['FlowProportion'])) {
            $model->flowProportion = $map['FlowProportion'];
        }

        if (isset($map['UrlDetail'])) {
            $model->urlDetail = $map['UrlDetail'];
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
