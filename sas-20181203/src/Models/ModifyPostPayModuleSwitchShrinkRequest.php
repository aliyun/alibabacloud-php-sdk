<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyPostPayModuleSwitchShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $postPaidHostAutoBind;

    /**
     * @var int
     */
    public $postPaidHostAutoBindVersion;

    /**
     * @var string
     */
    public $postPayInstanceId;

    /**
     * @var string
     */
    public $postPayModuleSwitch;

    /**
     * @var string
     */
    public $postPayModuleSwitchObjShrink;
    protected $_name = [
        'postPaidHostAutoBind' => 'PostPaidHostAutoBind',
        'postPaidHostAutoBindVersion' => 'PostPaidHostAutoBindVersion',
        'postPayInstanceId' => 'PostPayInstanceId',
        'postPayModuleSwitch' => 'PostPayModuleSwitch',
        'postPayModuleSwitchObjShrink' => 'PostPayModuleSwitchObj',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postPaidHostAutoBind) {
            $res['PostPaidHostAutoBind'] = $this->postPaidHostAutoBind;
        }

        if (null !== $this->postPaidHostAutoBindVersion) {
            $res['PostPaidHostAutoBindVersion'] = $this->postPaidHostAutoBindVersion;
        }

        if (null !== $this->postPayInstanceId) {
            $res['PostPayInstanceId'] = $this->postPayInstanceId;
        }

        if (null !== $this->postPayModuleSwitch) {
            $res['PostPayModuleSwitch'] = $this->postPayModuleSwitch;
        }

        if (null !== $this->postPayModuleSwitchObjShrink) {
            $res['PostPayModuleSwitchObj'] = $this->postPayModuleSwitchObjShrink;
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
        if (isset($map['PostPaidHostAutoBind'])) {
            $model->postPaidHostAutoBind = $map['PostPaidHostAutoBind'];
        }

        if (isset($map['PostPaidHostAutoBindVersion'])) {
            $model->postPaidHostAutoBindVersion = $map['PostPaidHostAutoBindVersion'];
        }

        if (isset($map['PostPayInstanceId'])) {
            $model->postPayInstanceId = $map['PostPayInstanceId'];
        }

        if (isset($map['PostPayModuleSwitch'])) {
            $model->postPayModuleSwitch = $map['PostPayModuleSwitch'];
        }

        if (isset($map['PostPayModuleSwitchObj'])) {
            $model->postPayModuleSwitchObjShrink = $map['PostPayModuleSwitchObj'];
        }

        return $model;
    }
}
