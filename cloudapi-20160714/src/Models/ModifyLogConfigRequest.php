<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyLogConfigRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $logType;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'slsProject'    => 'SlsProject',
        'slsLogStore'   => 'SlsLogStore',
        'logType'       => 'LogType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        return $model;
    }
}
