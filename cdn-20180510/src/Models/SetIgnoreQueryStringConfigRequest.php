<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetIgnoreQueryStringConfigRequest extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $hashKeyArgs;

    /**
     * @var string
     */
    public $keepOssArgs;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'configId'    => 'ConfigId',
        'domainName'  => 'DomainName',
        'enable'      => 'Enable',
        'hashKeyArgs' => 'HashKeyArgs',
        'keepOssArgs' => 'KeepOssArgs',
        'ownerId'     => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->hashKeyArgs) {
            $res['HashKeyArgs'] = $this->hashKeyArgs;
        }
        if (null !== $this->keepOssArgs) {
            $res['KeepOssArgs'] = $this->keepOssArgs;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetIgnoreQueryStringConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['HashKeyArgs'])) {
            $model->hashKeyArgs = $map['HashKeyArgs'];
        }
        if (isset($map['KeepOssArgs'])) {
            $model->keepOssArgs = $map['KeepOssArgs'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
