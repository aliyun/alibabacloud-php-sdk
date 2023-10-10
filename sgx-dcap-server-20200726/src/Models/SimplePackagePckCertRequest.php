<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models;

use AlibabaCloud\Tea\Model;

class SimplePackagePckCertRequest extends Model
{
    /**
     * @var string
     */
    public $acsHost;

    /**
     * @var string
     */
    public $clientVpcId;

    /**
     * @example 05050809FFFF00000000000000000000
     *
     * @var string
     */
    public $cpusvn;

    /**
     * @example 000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
     *
     * @var string
     */
    public $encryptedPpid;

    /**
     * @example 0000
     *
     * @var string
     */
    public $pceid;

    /**
     * @example 0D00
     *
     * @var string
     */
    public $pcesvn;

    /**
     * @example B5C869897796C3525B2163D3DE6754FA
     *
     * @var string
     */
    public $qeid;
    protected $_name = [
        'acsHost'       => 'AcsHost',
        'clientVpcId'   => 'ClientVpcId',
        'cpusvn'        => 'cpusvn',
        'encryptedPpid' => 'encrypted_ppid',
        'pceid'         => 'pceid',
        'pcesvn'        => 'pcesvn',
        'qeid'          => 'qeid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsHost) {
            $res['AcsHost'] = $this->acsHost;
        }
        if (null !== $this->clientVpcId) {
            $res['ClientVpcId'] = $this->clientVpcId;
        }
        if (null !== $this->cpusvn) {
            $res['cpusvn'] = $this->cpusvn;
        }
        if (null !== $this->encryptedPpid) {
            $res['encrypted_ppid'] = $this->encryptedPpid;
        }
        if (null !== $this->pceid) {
            $res['pceid'] = $this->pceid;
        }
        if (null !== $this->pcesvn) {
            $res['pcesvn'] = $this->pcesvn;
        }
        if (null !== $this->qeid) {
            $res['qeid'] = $this->qeid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimplePackagePckCertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsHost'])) {
            $model->acsHost = $map['AcsHost'];
        }
        if (isset($map['ClientVpcId'])) {
            $model->clientVpcId = $map['ClientVpcId'];
        }
        if (isset($map['cpusvn'])) {
            $model->cpusvn = $map['cpusvn'];
        }
        if (isset($map['encrypted_ppid'])) {
            $model->encryptedPpid = $map['encrypted_ppid'];
        }
        if (isset($map['pceid'])) {
            $model->pceid = $map['pceid'];
        }
        if (isset($map['pcesvn'])) {
            $model->pcesvn = $map['pcesvn'];
        }
        if (isset($map['qeid'])) {
            $model->qeid = $map['qeid'];
        }

        return $model;
    }
}
