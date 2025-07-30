<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class EnableDomainProxyTokenRequest extends Model
{
    /**
     * @description The ID of the domain name.
     *
     * This parameter is required.
     *
     * @example dm_examplexxxxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The ID of the proxy token of the domain name.
     *
     * This parameter is required.
     *
     * @example pt_examplexxxx
     *
     * @var string
     */
    public $domainProxyTokenId;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'domainId' => 'DomainId',
        'domainProxyTokenId' => 'DomainProxyTokenId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainProxyTokenId) {
            $res['DomainProxyTokenId'] = $this->domainProxyTokenId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableDomainProxyTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainProxyTokenId'])) {
            $model->domainProxyTokenId = $map['DomainProxyTokenId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
