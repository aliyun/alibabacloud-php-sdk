<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class EnableInsightRequest extends Model
{
    /**
     * @example IpInsight
     *
     * @var string
     */
    public $insightType;
    protected $_name = [
        'insightType' => 'InsightType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insightType) {
            $res['InsightType'] = $this->insightType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableInsightRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsightType'])) {
            $model->insightType = $map['InsightType'];
        }

        return $model;
    }
}
