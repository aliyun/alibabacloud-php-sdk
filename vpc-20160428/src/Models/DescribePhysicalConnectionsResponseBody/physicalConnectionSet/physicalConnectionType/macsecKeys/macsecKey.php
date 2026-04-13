<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType\macsecKeys;

use AlibabaCloud\Dara\Model;

class macsecKey extends Model
{
    /**
     * @var string
     */
    public $cak;

    /**
     * @var string
     */
    public $cipherSuite;

    /**
     * @var string
     */
    public $ckn;

    /**
     * @var string
     */
    public $startOn;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cak' => 'Cak',
        'cipherSuite' => 'CipherSuite',
        'ckn' => 'Ckn',
        'startOn' => 'StartOn',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cak) {
            $res['Cak'] = $this->cak;
        }

        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }

        if (null !== $this->ckn) {
            $res['Ckn'] = $this->ckn;
        }

        if (null !== $this->startOn) {
            $res['StartOn'] = $this->startOn;
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
        if (isset($map['Cak'])) {
            $model->cak = $map['Cak'];
        }

        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }

        if (isset($map['Ckn'])) {
            $model->ckn = $map['Ckn'];
        }

        if (isset($map['StartOn'])) {
            $model->startOn = $map['StartOn'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
