<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetOpportunityMarketResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cateName;

    /**
     * @var float
     */
    public $opportunityIndex;

    /**
     * @var float
     */
    public $relativeCommodity;

    /**
     * @var float
     */
    public $relativeDischarge;

    /**
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'cateName'          => 'CateName',
        'opportunityIndex'  => 'OpportunityIndex',
        'relativeCommodity' => 'RelativeCommodity',
        'relativeDischarge' => 'RelativeDischarge',
        'timeUnit'          => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->opportunityIndex) {
            $res['OpportunityIndex'] = $this->opportunityIndex;
        }
        if (null !== $this->relativeCommodity) {
            $res['RelativeCommodity'] = $this->relativeCommodity;
        }
        if (null !== $this->relativeDischarge) {
            $res['RelativeDischarge'] = $this->relativeDischarge;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
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
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['OpportunityIndex'])) {
            $model->opportunityIndex = $map['OpportunityIndex'];
        }
        if (isset($map['RelativeCommodity'])) {
            $model->relativeCommodity = $map['RelativeCommodity'];
        }
        if (isset($map['RelativeDischarge'])) {
            $model->relativeDischarge = $map['RelativeDischarge'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
