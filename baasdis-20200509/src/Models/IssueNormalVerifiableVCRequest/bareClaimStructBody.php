<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models\IssueNormalVerifiableVCRequest;

use AlibabaCloud\Tea\Model;

class bareClaimStructBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example "test"
     *
     * @var string
     */
    public $claim;

    /**
     * @example ""
     *
     * @var string
     */
    public $claimType;
    protected $_name = [
        'claim'     => 'Claim',
        'claimType' => 'ClaimType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->claim) {
            $res['Claim'] = $this->claim;
        }
        if (null !== $this->claimType) {
            $res['ClaimType'] = $this->claimType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bareClaimStructBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Claim'])) {
            $model->claim = $map['Claim'];
        }
        if (isset($map['ClaimType'])) {
            $model->claimType = $map['ClaimType'];
        }

        return $model;
    }
}
