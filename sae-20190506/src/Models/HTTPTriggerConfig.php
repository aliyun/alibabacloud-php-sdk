<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class HTTPTriggerConfig extends Model
{
    /**
     * @var AclConfig
     */
    public $aclConfig;

    /**
     * @var mixed
     */
    public $authConfig;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $disableURLInternet;

    /**
     * @var bool
     */
    public $safeMode;
    protected $_name = [
        'aclConfig'          => 'aclConfig',
        'authConfig'         => 'authConfig',
        'authType'           => 'authType',
        'disableURLInternet' => 'disableURLInternet',
        'safeMode'           => 'safeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclConfig) {
            $res['aclConfig'] = null !== $this->aclConfig ? $this->aclConfig->toMap() : null;
        }
        if (null !== $this->authConfig) {
            $res['authConfig'] = $this->authConfig;
        }
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }
        if (null !== $this->disableURLInternet) {
            $res['disableURLInternet'] = $this->disableURLInternet;
        }
        if (null !== $this->safeMode) {
            $res['safeMode'] = $this->safeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPTriggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclConfig'])) {
            $model->aclConfig = AclConfig::fromMap($map['aclConfig']);
        }
        if (isset($map['authConfig'])) {
            $model->authConfig = $map['authConfig'];
        }
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }
        if (isset($map['disableURLInternet'])) {
            $model->disableURLInternet = $map['disableURLInternet'];
        }
        if (isset($map['safeMode'])) {
            $model->safeMode = $map['safeMode'];
        }

        return $model;
    }
}
