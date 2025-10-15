<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationTokenResponseBody;

use AlibabaCloud\Dara\Model;

class applicationTokens extends Model
{
    /**
     * @var string
     */
    public $applicationToken;

    /**
     * @var string
     */
    public $applicationTokenId;

    /**
     * @var string
     */
    public $applicationTokenType;
    protected $_name = [
        'applicationToken' => 'ApplicationToken',
        'applicationTokenId' => 'ApplicationTokenId',
        'applicationTokenType' => 'ApplicationTokenType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationToken) {
            $res['ApplicationToken'] = $this->applicationToken;
        }

        if (null !== $this->applicationTokenId) {
            $res['ApplicationTokenId'] = $this->applicationTokenId;
        }

        if (null !== $this->applicationTokenType) {
            $res['ApplicationTokenType'] = $this->applicationTokenType;
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
        if (isset($map['ApplicationToken'])) {
            $model->applicationToken = $map['ApplicationToken'];
        }

        if (isset($map['ApplicationTokenId'])) {
            $model->applicationTokenId = $map['ApplicationTokenId'];
        }

        if (isset($map['ApplicationTokenType'])) {
            $model->applicationTokenType = $map['ApplicationTokenType'];
        }

        return $model;
    }
}
