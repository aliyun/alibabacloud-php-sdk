<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class EnableInsightRequest extends Model
{
    /**
     * @var string
     */
    public $insightType;
    protected $_name = [
        'insightType' => 'InsightType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insightType) {
            $res['InsightType'] = $this->insightType;
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
        if (isset($map['InsightType'])) {
            $model->insightType = $map['InsightType'];
        }

        return $model;
    }
}
