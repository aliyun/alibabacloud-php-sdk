<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentRequest;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @var bool
     */
    public $withSiteSurveyReport;
    protected $_name = [
        'withSiteSurveyReport' => 'withSiteSurveyReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withSiteSurveyReport) {
            $res['withSiteSurveyReport'] = $this->withSiteSurveyReport;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withSiteSurveyReport'])) {
            $model->withSiteSurveyReport = $map['withSiteSurveyReport'];
        }

        return $model;
    }
}
