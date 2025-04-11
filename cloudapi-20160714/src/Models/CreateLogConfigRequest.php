<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class CreateLogConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $createSlr;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'createSlr' => 'CreateSlr',
        'logType' => 'LogType',
        'securityToken' => 'SecurityToken',
        'slsLogStore' => 'SlsLogStore',
        'slsProject' => 'SlsProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createSlr) {
            $res['CreateSlr'] = $this->createSlr;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }

        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
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
        if (isset($map['CreateSlr'])) {
            $model->createSlr = $map['CreateSlr'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }

        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        return $model;
    }
}
