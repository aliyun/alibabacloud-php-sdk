<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;

use AlibabaCloud\Tea\Model;

class forwardTableEntry extends Model
{
    /**
     * @example 139.79.XX.XX
     *
     * @var string
     */
    public $externalIp;

    /**
     * @example 80
     *
     * @var string
     */
    public $externalPort;

    /**
     * @example fwd-119smw5tk****
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @example ForwardEntry-1
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @example ftb-11tc6xgmv****
     *
     * @var string
     */
    public $forwardTableId;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $internalIp;

    /**
     * @example 25
     *
     * @var string
     */
    public $internalPort;

    /**
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'externalIp'       => 'ExternalIp',
        'externalPort'     => 'ExternalPort',
        'forwardEntryId'   => 'ForwardEntryId',
        'forwardEntryName' => 'ForwardEntryName',
        'forwardTableId'   => 'ForwardTableId',
        'internalIp'       => 'InternalIp',
        'internalPort'     => 'InternalPort',
        'ipProtocol'       => 'IpProtocol',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->forwardEntryName) {
            $res['ForwardEntryName'] = $this->forwardEntryName;
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

    /**
     * @param array $map
     *
     * @return forwardTableEntry
     */
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
        if (isset($map['ForwardEntryName'])) {
            $model->forwardEntryName = $map['ForwardEntryName'];
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
