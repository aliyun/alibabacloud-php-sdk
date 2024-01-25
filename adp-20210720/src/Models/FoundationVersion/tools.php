<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion;

use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\tools\siteSurvey;
use AlibabaCloud\Tea\Model;

class tools extends Model
{
    /**
     * @var siteSurvey
     */
    public $siteSurvey;
    protected $_name = [
        'siteSurvey' => 'siteSurvey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteSurvey) {
            $res['siteSurvey'] = null !== $this->siteSurvey ? $this->siteSurvey->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['siteSurvey'])) {
            $model->siteSurvey = siteSurvey::fromMap($map['siteSurvey']);
        }

        return $model;
    }
}
