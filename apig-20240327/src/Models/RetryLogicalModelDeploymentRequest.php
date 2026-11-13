<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class RetryLogicalModelDeploymentRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $expectedRevision;
    protected $_name = [
        'clientToken' => 'clientToken',
        'expectedRevision' => 'expectedRevision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->expectedRevision) {
            $res['expectedRevision'] = $this->expectedRevision;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['expectedRevision'])) {
            $model->expectedRevision = $map['expectedRevision'];
        }

        return $model;
    }
}
