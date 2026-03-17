<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesResponseBody\dnatEntries;

use AlibabaCloud\Dara\Model;

class dnatEntry extends Model
{
    /**
     * @var string
     */
    public $dnatEntryId;

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
    public $sagId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dnatEntryId' => 'DnatEntryId',
        'externalIp' => 'ExternalIp',
        'externalPort' => 'ExternalPort',
        'internalIp' => 'InternalIp',
        'internalPort' => 'InternalPort',
        'ipProtocol' => 'IpProtocol',
        'sagId' => 'SagId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnatEntryId) {
            $res['DnatEntryId'] = $this->dnatEntryId;
        }

        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }

        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
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

        if (null !== $this->sagId) {
            $res['SagId'] = $this->sagId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DnatEntryId'])) {
            $model->dnatEntryId = $map['DnatEntryId'];
        }

        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }

        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
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

        if (isset($map['SagId'])) {
            $model->sagId = $map['SagId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
