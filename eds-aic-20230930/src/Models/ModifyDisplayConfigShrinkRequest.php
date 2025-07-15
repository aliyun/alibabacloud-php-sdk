<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDisplayConfigShrinkRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var string
     */
    public $displayConfigShrink;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'displayConfigShrink' => 'DisplayConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->displayConfigShrink) {
            $res['DisplayConfig'] = $this->displayConfigShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDisplayConfigShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['DisplayConfig'])) {
            $model->displayConfigShrink = $map['DisplayConfig'];
        }

        return $model;
    }
}
