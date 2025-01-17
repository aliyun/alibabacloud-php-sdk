<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyPostPayModuleSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $postPayInstanceId;
    /**
     * @var string
     */
    public $postPayModuleSwitch;
    protected $_name = [
        'postPayInstanceId'   => 'PostPayInstanceId',
        'postPayModuleSwitch' => 'PostPayModuleSwitch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postPayInstanceId) {
            $res['PostPayInstanceId'] = $this->postPayInstanceId;
        }

        if (null !== $this->postPayModuleSwitch) {
            $res['PostPayModuleSwitch'] = $this->postPayModuleSwitch;
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
        if (isset($map['PostPayInstanceId'])) {
            $model->postPayInstanceId = $map['PostPayInstanceId'];
        }

        if (isset($map['PostPayModuleSwitch'])) {
            $model->postPayModuleSwitch = $map['PostPayModuleSwitch'];
        }

        return $model;
    }
}
