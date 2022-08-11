<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetAccountSettingsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $availableAZs;

    /**
     * @var string
     */
    public $defaultRole;
    protected $_name = [
        'availableAZs' => 'availableAZs',
        'defaultRole'  => 'defaultRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAZs) {
            $res['availableAZs'] = $this->availableAZs;
        }
        if (null !== $this->defaultRole) {
            $res['defaultRole'] = $this->defaultRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountSettingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['availableAZs'])) {
            if (!empty($map['availableAZs'])) {
                $model->availableAZs = $map['availableAZs'];
            }
        }
        if (isset($map['defaultRole'])) {
            $model->defaultRole = $map['defaultRole'];
        }

        return $model;
    }
}
