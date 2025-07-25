<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class OversoldUsageConfig extends Model
{
    /**
     * @var string
     */
    public $disabled;

    /**
     * @var string
     */
    public $disabledBy;
    protected $_name = [
        'disabled' => 'Disabled',
        'disabledBy' => 'DisabledBy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->disabledBy) {
            $res['DisabledBy'] = $this->disabledBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OversoldUsageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['DisabledBy'])) {
            $model->disabledBy = $map['DisabledBy'];
        }

        return $model;
    }
}
