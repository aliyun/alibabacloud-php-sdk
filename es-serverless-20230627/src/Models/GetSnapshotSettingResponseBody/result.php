<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetSnapshotSettingResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $quartzRegex;
    protected $_name = [
        'enable' => 'enable',
        'quartzRegex' => 'quartzRegex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->quartzRegex) {
            $res['quartzRegex'] = $this->quartzRegex;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['quartzRegex'])) {
            $model->quartzRegex = $map['quartzRegex'];
        }

        return $model;
    }
}
