<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class ListAuthenticationTokensRequest extends Model
{
    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $credentialProviderIdentifier;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var bool
     */
    public $revoked;
    protected $_name = [
        'consumerId' => 'consumerId',
        'credentialProviderIdentifier' => 'credentialProviderIdentifier',
        'expired' => 'expired',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'revoked' => 'revoked',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->credentialProviderIdentifier) {
            $res['credentialProviderIdentifier'] = $this->credentialProviderIdentifier;
        }

        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->revoked) {
            $res['revoked'] = $this->revoked;
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
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['credentialProviderIdentifier'])) {
            $model->credentialProviderIdentifier = $map['credentialProviderIdentifier'];
        }

        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['revoked'])) {
            $model->revoked = $map['revoked'];
        }

        return $model;
    }
}
