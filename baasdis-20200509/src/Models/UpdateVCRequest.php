<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class UpdateVCRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example "did:mychain:xxx"
     *
     * @var string
     */
    public $issuerDid;

    /**
     * @description This parameter is required.
     *
     * @example vc:mychain:xxx
     *
     * @var string
     */
    public $VCId;

    /**
     * @description This parameter is required.
     *
     * @example "1"
     *
     * @var string
     */
    public $VCStatus;
    protected $_name = [
        'issuerDid' => 'IssuerDid',
        'VCId'      => 'VCId',
        'VCStatus'  => 'VCStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issuerDid) {
            $res['IssuerDid'] = $this->issuerDid;
        }
        if (null !== $this->VCId) {
            $res['VCId'] = $this->VCId;
        }
        if (null !== $this->VCStatus) {
            $res['VCStatus'] = $this->VCStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVCRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssuerDid'])) {
            $model->issuerDid = $map['IssuerDid'];
        }
        if (isset($map['VCId'])) {
            $model->VCId = $map['VCId'];
        }
        if (isset($map['VCStatus'])) {
            $model->VCStatus = $map['VCStatus'];
        }

        return $model;
    }
}
