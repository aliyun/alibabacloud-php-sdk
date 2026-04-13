<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class ListDetectConfigRelationsRequest extends Model
{
    /**
     * @var string
     */
    public $detectConfigId;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'detectConfigId' => 'detectConfigId',
        'targetId' => 'targetId',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectConfigId) {
            $res['detectConfigId'] = $this->detectConfigId;
        }

        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
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
        if (isset($map['detectConfigId'])) {
            $model->detectConfigId = $map['detectConfigId'];
        }

        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
