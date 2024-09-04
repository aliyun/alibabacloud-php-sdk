<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\SDK\BaasDis\V20200509\Models\IssueNormalVerifiableVCRequest\bareClaimStructBody;
use AlibabaCloud\Tea\Model;

class IssueNormalVerifiableVCRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var bareClaimStructBody[]
     */
    public $bareClaimStructBody;

    /**
     * @description This parameter is required.
     *
     * @example 01357967-61d1-42a9-8a90-f0dd8a161411
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example -1
     *
     * @var int
     */
    public $expiration;

    /**
     * @description This parameter is required.
     *
     * @example "did:mychain:xxx"
     *
     * @var string
     */
    public $issuer;

    /**
     * @description This parameter is required.
     *
     * @example "did:mychain:xxx"
     *
     * @var string
     */
    public $subject;
    protected $_name = [
        'bareClaimStructBody' => 'BareClaimStructBody',
        'clientToken'         => 'ClientToken',
        'expiration'          => 'Expiration',
        'issuer'              => 'Issuer',
        'subject'             => 'Subject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bareClaimStructBody) {
            $res['BareClaimStructBody'] = [];
            if (null !== $this->bareClaimStructBody && \is_array($this->bareClaimStructBody)) {
                $n = 0;
                foreach ($this->bareClaimStructBody as $item) {
                    $res['BareClaimStructBody'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IssueNormalVerifiableVCRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BareClaimStructBody'])) {
            if (!empty($map['BareClaimStructBody'])) {
                $model->bareClaimStructBody = [];
                $n                          = 0;
                foreach ($map['BareClaimStructBody'] as $item) {
                    $model->bareClaimStructBody[$n++] = null !== $item ? bareClaimStructBody::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
