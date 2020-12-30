<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesResponseBody\dnatEntries;

use AlibabaCloud\Tea\Model;

class dnatEntry extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $sagId;

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

    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $dnatEntryId;

    /**
     * @var string
     */
    public $externalIp;
    protected $_name = [
        'type'         => 'Type',
        'sagId'        => 'SagId',
        'internalIp'   => 'InternalIp',
        'internalPort' => 'InternalPort',
        'ipProtocol'   => 'IpProtocol',
        'externalPort' => 'ExternalPort',
        'dnatEntryId'  => 'DnatEntryId',
        'externalIp'   => 'ExternalIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->sagId) {
            $res['SagId'] = $this->sagId;
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
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->dnatEntryId) {
            $res['DnatEntryId'] = $this->dnatEntryId;
        }
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnatEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SagId'])) {
            $model->sagId = $map['SagId'];
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
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['DnatEntryId'])) {
            $model->dnatEntryId = $map['DnatEntryId'];
        }
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }

        return $model;
    }
}
