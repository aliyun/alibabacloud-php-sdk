<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListTagMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $tagMetric;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $dateTime;
    protected $_name = [
        'tagMetric' => 'TagMetric',
        'tagCode'   => 'TagCode',
        'corpId'    => 'CorpId',
        'tagValue'  => 'TagValue',
        'dateTime'  => 'DateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagMetric) {
            $res['TagMetric'] = $this->tagMetric;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
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
        if (isset($map['TagMetric'])) {
            $model->tagMetric = $map['TagMetric'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        return $model;
    }
}
