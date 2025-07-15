<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyDisplayConfigRequest\displayConfig;
use AlibabaCloud\Tea\Model;

class ModifyDisplayConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var displayConfig
     */
    public $displayConfig;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'displayConfig' => 'DisplayConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = null !== $this->displayConfig ? $this->displayConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDisplayConfigRequest
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
            $model->displayConfig = displayConfig::fromMap($map['DisplayConfig']);
        }

        return $model;
    }
}
