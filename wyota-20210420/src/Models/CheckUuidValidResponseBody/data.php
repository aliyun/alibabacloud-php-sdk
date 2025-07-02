<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\CheckUuidValidResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $newUpgrade;
    protected $_name = [
        'newUpgrade' => 'NewUpgrade',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newUpgrade) {
            $res['NewUpgrade'] = $this->newUpgrade;
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
        if (isset($map['NewUpgrade'])) {
            $model->newUpgrade = $map['NewUpgrade'];
        }

        return $model;
    }
}
