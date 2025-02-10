<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class ChangeDomainOfDnsProductRequest extends Model
{
    /**
     * @var bool
     */
    public $force;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $newDomain;
    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'force'        => 'Force',
        'instanceId'   => 'InstanceId',
        'lang'         => 'Lang',
        'newDomain'    => 'NewDomain',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->newDomain) {
            $res['NewDomain'] = $this->newDomain;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NewDomain'])) {
            $model->newDomain = $map['NewDomain'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
