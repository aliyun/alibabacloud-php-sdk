<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_;

use AlibabaCloud\Tea\Model;

class scoreConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $passScore;
    protected $_name = [
        'enabled'   => 'enabled',
        'passScore' => 'passScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->passScore) {
            $res['passScore'] = $this->passScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scoreConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['passScore'])) {
            $model->passScore = $map['passScore'];
        }

        return $model;
    }
}
