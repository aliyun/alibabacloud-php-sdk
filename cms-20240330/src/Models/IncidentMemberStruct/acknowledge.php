<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct;

use AlibabaCloud\Tea\Model;

class acknowledge extends Model
{
    /**
     * @var string
     */
    public $breakLevel;

    /**
     * @var int
     */
    public $verifyTime;
    protected $_name = [
        'breakLevel' => 'breakLevel',
        'verifyTime' => 'verifyTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakLevel) {
            $res['breakLevel'] = $this->breakLevel;
        }
        if (null !== $this->verifyTime) {
            $res['verifyTime'] = $this->verifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acknowledge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['breakLevel'])) {
            $model->breakLevel = $map['breakLevel'];
        }
        if (isset($map['verifyTime'])) {
            $model->verifyTime = $map['verifyTime'];
        }

        return $model;
    }
}
