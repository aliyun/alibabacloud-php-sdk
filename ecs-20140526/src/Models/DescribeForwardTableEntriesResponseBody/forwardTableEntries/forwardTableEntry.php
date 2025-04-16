<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;

use AlibabaCloud\Dara\Model;

class forwardTableEntry extends Model
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
    public $forwardEntryId;

    /**
     * @var string
     */
    public $forwardTableId;

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
    public $status;
    protected $_name = [
        'externalIp' => 'ExternalIp',
        'externalPort' => 'ExternalPort',
        'forwardEntryId' => 'ForwardEntryId',
        'forwardTableId' => 'ForwardTableId',
        'internalIp' => 'InternalIp',
        'internalPort' => 'InternalPort',
        'ipProtocol' => 'IpProtocol',
        'status' => 'Status',
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

        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }

        if (null !== $this->forwardTableId) {
            $res['ForwardTableId'] = $this->forwardTableId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }

        if (isset($map['ForwardTableId'])) {
            $model->forwardTableId = $map['ForwardTableId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
