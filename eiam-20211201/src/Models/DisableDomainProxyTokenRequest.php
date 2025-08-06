<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DisableDomainProxyTokenRequest extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainProxyTokenId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'domainId' => 'DomainId',
        'domainProxyTokenId' => 'DomainProxyTokenId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
