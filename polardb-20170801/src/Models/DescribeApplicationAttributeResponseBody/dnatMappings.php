<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class dnatMappings extends Model
{
    /**
     * @var string
     */
    public $accessAddress;

    /**
     * @var int
     */
    public $backendPort;

    /**
     * @var string
     */
    public $entryId;

    /**
     * @var int
     */
    public $frontPort;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accessAddress' => 'AccessAddress',
        'backendPort' => 'BackendPort',
        'entryId' => 'EntryId',
        'frontPort' => 'FrontPort',
        'portName' => 'PortName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessAddress) {
            $res['AccessAddress'] = $this->accessAddress;
        }

        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }

        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }

        if (null !== $this->frontPort) {
            $res['FrontPort'] = $this->frontPort;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
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
        if (isset($map['AccessAddress'])) {
            $model->accessAddress = $map['AccessAddress'];
        }

        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }

        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }

        if (isset($map['FrontPort'])) {
            $model->frontPort = $map['FrontPort'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
