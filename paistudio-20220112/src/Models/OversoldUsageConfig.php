<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
