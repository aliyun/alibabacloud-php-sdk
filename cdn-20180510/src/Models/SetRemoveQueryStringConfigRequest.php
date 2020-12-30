<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetRemoveQueryStringConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $aliRemoveArgs;

    /**
     * @var string
     */
    public $keepOssArgs;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'domainName'    => 'DomainName',
        'configId'      => 'ConfigId',
        'aliRemoveArgs' => 'AliRemoveArgs',
        'keepOssArgs'   => 'KeepOssArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->aliRemoveArgs) {
            $res['AliRemoveArgs'] = $this->aliRemoveArgs;
        }
        if (null !== $this->keepOssArgs) {
            $res['KeepOssArgs'] = $this->keepOssArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRemoveQueryStringConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['AliRemoveArgs'])) {
            $model->aliRemoveArgs = $map['AliRemoveArgs'];
        }
        if (isset($map['KeepOssArgs'])) {
            $model->keepOssArgs = $map['KeepOssArgs'];
        }

        return $model;
    }
}
