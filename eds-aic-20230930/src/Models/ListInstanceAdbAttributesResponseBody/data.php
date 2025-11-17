<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListInstanceAdbAttributesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $externalIp;

    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internalIp;

    /**
     * @var string
     */
    public $internalPort;

    /**
     * @var string
     */
    public $ipProtocol;
    protected $_name = [
        'externalIp' => 'ExternalIp',
        'externalPort' => 'ExternalPort',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'instanceId' => 'InstanceId',
        'internalIp' => 'InternalIp',
        'internalPort' => 'InternalPort',
        'ipProtocol' => 'IpProtocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }

        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }

        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
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
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }

        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }

        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        return $model;
    }
}
