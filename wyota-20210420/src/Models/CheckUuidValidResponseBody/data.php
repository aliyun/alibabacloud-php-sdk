<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\CheckUuidValidResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newUpgrade) {
            $res['NewUpgrade'] = $this->newUpgrade;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewUpgrade'])) {
            $model->newUpgrade = $map['NewUpgrade'];
        }

        return $model;
    }
}
