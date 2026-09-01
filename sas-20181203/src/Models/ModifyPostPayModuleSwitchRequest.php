<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPostPayModuleSwitchRequest\edrModuleSwitch;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPostPayModuleSwitchRequest\postPayModuleSwitchObj;

class ModifyPostPayModuleSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var edrModuleSwitch
     */
    public $edrModuleSwitch;

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
     * @var postPayModuleSwitchObj
     */
    public $postPayModuleSwitchObj;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'edrModuleSwitch' => 'EdrModuleSwitch',
        'postPaidHostAutoBind' => 'PostPaidHostAutoBind',
        'postPaidHostAutoBindVersion' => 'PostPaidHostAutoBindVersion',
        'postPayInstanceId' => 'PostPayInstanceId',
        'postPayModuleSwitch' => 'PostPayModuleSwitch',
        'postPayModuleSwitchObj' => 'PostPayModuleSwitchObj',
    ];

    public function validate()
    {
        if (null !== $this->edrModuleSwitch) {
            $this->edrModuleSwitch->validate();
        }
        if (null !== $this->postPayModuleSwitchObj) {
            $this->postPayModuleSwitchObj->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->edrModuleSwitch) {
            $res['EdrModuleSwitch'] = null !== $this->edrModuleSwitch ? $this->edrModuleSwitch->toArray($noStream) : $this->edrModuleSwitch;
        }

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

        if (null !== $this->postPayModuleSwitchObj) {
            $res['PostPayModuleSwitchObj'] = null !== $this->postPayModuleSwitchObj ? $this->postPayModuleSwitchObj->toArray($noStream) : $this->postPayModuleSwitchObj;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EdrModuleSwitch'])) {
            $model->edrModuleSwitch = edrModuleSwitch::fromMap($map['EdrModuleSwitch']);
        }

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
            $model->postPayModuleSwitchObj = postPayModuleSwitchObj::fromMap($map['PostPayModuleSwitchObj']);
        }

        return $model;
    }
}
