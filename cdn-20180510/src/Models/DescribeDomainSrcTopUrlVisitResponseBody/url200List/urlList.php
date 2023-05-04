<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcTopUrlVisitResponseBody\url200List;

use AlibabaCloud\Tea\Model;

class urlList extends Model
{
    /**
     * @description Queries frequently requested back-to-origin URLs of one or more accelerated domain names.
     *
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
     * @example http://example.com/nn_live/nn_x64/a0.m3u8
     *
     * @var string
     */
    public $urlDetail;

    /**
     * @example 161673
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
        'urlDetail'       => 'UrlDetail',
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

    /**
     * @param array $map
     *
     * @return urlList
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
