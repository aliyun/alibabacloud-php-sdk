<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class UpdateAutoUpgradeRequest extends Model
{
    /**
     * @var string
     */
    public $autoUpgrade;
    protected $_name = [
        'autoUpgrade' => 'autoUpgrade',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUpgrade) {
            $res['autoUpgrade'] = $this->autoUpgrade;
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
        if (isset($map['autoUpgrade'])) {
            $model->autoUpgrade = $map['autoUpgrade'];
        }

        return $model;
    }
}
