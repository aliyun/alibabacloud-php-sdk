<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class PutInsightSelectorsRequest extends Model
{
    /**
     * @var string
     */
    public $insightSelectors;

    /**
     * @var string
     */
    public $trailName;
    protected $_name = [
        'insightSelectors' => 'InsightSelectors',
        'trailName' => 'TrailName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insightSelectors) {
            $res['InsightSelectors'] = $this->insightSelectors;
        }

        if (null !== $this->trailName) {
            $res['TrailName'] = $this->trailName;
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
        if (isset($map['InsightSelectors'])) {
            $model->insightSelectors = $map['InsightSelectors'];
        }

        if (isset($map['TrailName'])) {
            $model->trailName = $map['TrailName'];
        }

        return $model;
    }
}
