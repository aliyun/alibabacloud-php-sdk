<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdatePublishAutoUpgradeRequest extends Model
{
    /**
     * @var int
     */
    public $autoUpgrade;
    protected $_name = [
        'autoUpgrade' => 'AutoUpgrade',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUpgrade) {
            $res['AutoUpgrade'] = $this->autoUpgrade;
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
        if (isset($map['AutoUpgrade'])) {
            $model->autoUpgrade = $map['AutoUpgrade'];
        }

        return $model;
    }
}
