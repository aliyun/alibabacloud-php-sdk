<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Tea\Model;

class receivers extends Model
{
    /**
     * @var string[]
     */
    public $alertTargets;

    /**
     * @example OWNER
     *
     * @var string
     */
    public $alertUnit;
    protected $_name = [
        'alertTargets' => 'AlertTargets',
        'alertUnit'    => 'AlertUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receivers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = $map['AlertTargets'];
            }
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }

        return $model;
    }
}
