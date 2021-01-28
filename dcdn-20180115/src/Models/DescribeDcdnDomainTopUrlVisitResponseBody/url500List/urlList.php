<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopUrlVisitResponseBody\url500List;

use AlibabaCloud\Tea\Model;

class urlList extends Model
{
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

    /**
     * @var string
     */
    public $flow;

    /**
     * @var float
     */
    public $flowProportion;
    protected $_name = [
        'urlDetail'       => 'UrlDetail',
        'visitData'       => 'VisitData',
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
        if (null !== $this->urlDetail) {
            $res['UrlDetail'] = $this->urlDetail;
        }
        if (null !== $this->visitData) {
            $res['VisitData'] = $this->visitData;
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
     * @return urlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlDetail'])) {
            $model->urlDetail = $map['UrlDetail'];
        }
        if (isset($map['VisitData'])) {
            $model->visitData = $map['VisitData'];
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
