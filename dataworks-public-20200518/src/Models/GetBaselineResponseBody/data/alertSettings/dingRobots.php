<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineResponseBody\data\alertSettings;

use AlibabaCloud\Tea\Model;

class dingRobots extends Model
{
    /**
     * @var bool
     */
    public $atAll;

    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'atAll'  => 'AtAll',
        'webUrl' => 'WebUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atAll) {
            $res['AtAll'] = $this->atAll;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingRobots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AtAll'])) {
            $model->atAll = $map['AtAll'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }

        return $model;
    }
}
