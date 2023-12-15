<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListTagMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2021-01-25
     *
     * @var string
     */
    public $dateTime;

    /**
     * @example tag_corp_total_personnum
     *
     * @var string
     */
    public $tagCode;

    /**
     * @example 52
     *
     * @var string
     */
    public $tagMetric;

    /**
     * @example 1
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'corpId'    => 'CorpId',
        'dateTime'  => 'DateTime',
        'tagCode'   => 'TagCode',
        'tagMetric' => 'TagMetric',
        'tagValue'  => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagMetric) {
            $res['TagMetric'] = $this->tagMetric;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagMetric'])) {
            $model->tagMetric = $map['TagMetric'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
