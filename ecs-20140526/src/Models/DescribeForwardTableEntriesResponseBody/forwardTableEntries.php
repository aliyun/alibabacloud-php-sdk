<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class forwardTableEntries extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $forwardEntryId;

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
    public $forwardTableId;

    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $externalIp;
    protected $_name = [
        'status'         => 'Status',
        'forwardEntryId' => 'ForwardEntryId',
        'internalIp'     => 'InternalIp',
        'internalPort'   => 'InternalPort',
        'forwardTableId' => 'ForwardTableId',
        'externalPort'   => 'ExternalPort',
        'ipProtocol'     => 'IpProtocol',
        'externalIp'     => 'ExternalIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->forwardTableId) {
            $res['ForwardTableId'] = $this->forwardTableId;
        }
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardTableEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['ForwardTableId'])) {
            $model->forwardTableId = $map['ForwardTableId'];
        }
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }

        return $model;
    }
}
