<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListMetricsResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagMetric;
    protected $_name = [
        'dateTime'  => 'DateTime',
        'tagCode'   => 'TagCode',
        'tagValue'  => 'TagValue',
        'tagMetric' => 'TagMetric',
    ];

    public function validate()
    {
        Model::validateRequired('dateTime', $this->dateTime, true);
        Model::validateRequired('tagCode', $this->tagCode, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('tagMetric', $this->tagMetric, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->tagMetric) {
            $res['TagMetric'] = $this->tagMetric;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TagMetric'])) {
            $model->tagMetric = $map['TagMetric'];
        }

        return $model;
    }
}
