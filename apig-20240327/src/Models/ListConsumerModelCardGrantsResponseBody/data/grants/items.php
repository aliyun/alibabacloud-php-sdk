<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerModelCardGrantsResponseBody\data\grants;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $grantTimestamp;

    /**
     * @var string
     */
    public $httpApiId;

    /**
     * @var string
     */
    public $modelCardId;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'grantTimestamp' => 'grantTimestamp',
        'httpApiId' => 'httpApiId',
        'modelCardId' => 'modelCardId',
        'principalId' => 'principalId',
        'principalType' => 'principalType',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantTimestamp) {
            $res['grantTimestamp'] = $this->grantTimestamp;
        }

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->modelCardId) {
            $res['modelCardId'] = $this->modelCardId;
        }

        if (null !== $this->principalId) {
            $res['principalId'] = $this->principalId;
        }

        if (null !== $this->principalType) {
            $res['principalType'] = $this->principalType;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['grantTimestamp'])) {
            $model->grantTimestamp = $map['grantTimestamp'];
        }

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['modelCardId'])) {
            $model->modelCardId = $map['modelCardId'];
        }

        if (isset($map['principalId'])) {
            $model->principalId = $map['principalId'];
        }

        if (isset($map['principalType'])) {
            $model->principalType = $map['principalType'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
