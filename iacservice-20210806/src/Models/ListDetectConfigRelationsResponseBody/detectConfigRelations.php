<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListDetectConfigRelationsResponseBody;

use AlibabaCloud\Dara\Model;

class detectConfigRelations extends Model
{
    /**
     * @var string
     */
    public $attachDate;

    /**
     * @var string
     */
    public $detectConfigId;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'attachDate' => 'attachDate',
        'detectConfigId' => 'detectConfigId',
        'enabled' => 'enabled',
        'targetId' => 'targetId',
        'targetName' => 'targetName',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachDate) {
            $res['attachDate'] = $this->attachDate;
        }

        if (null !== $this->detectConfigId) {
            $res['detectConfigId'] = $this->detectConfigId;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
        }

        if (null !== $this->targetName) {
            $res['targetName'] = $this->targetName;
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
        if (isset($map['attachDate'])) {
            $model->attachDate = $map['attachDate'];
        }

        if (isset($map['detectConfigId'])) {
            $model->detectConfigId = $map['detectConfigId'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }

        if (isset($map['targetName'])) {
            $model->targetName = $map['targetName'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
