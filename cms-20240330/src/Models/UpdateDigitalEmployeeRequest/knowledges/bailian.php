<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeRequest\knowledges;

use AlibabaCloud\Dara\Model;

class bailian extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'attributes' => 'attributes',
        'indexId' => 'indexId',
        'region' => 'region',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }

        if (null !== $this->indexId) {
            $res['indexId'] = $this->indexId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }

        if (isset($map['indexId'])) {
            $model->indexId = $map['indexId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
