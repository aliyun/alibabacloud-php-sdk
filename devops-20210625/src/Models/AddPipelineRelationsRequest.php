<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class AddPipelineRelationsRequest extends Model
{
    /**
     * @var string
     */
    public $relObjectIds;
    /**
     * @var string
     */
    public $relObjectType;
    protected $_name = [
        'relObjectIds'  => 'relObjectIds',
        'relObjectType' => 'relObjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relObjectIds) {
            $res['relObjectIds'] = $this->relObjectIds;
        }

        if (null !== $this->relObjectType) {
            $res['relObjectType'] = $this->relObjectType;
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
        if (isset($map['relObjectIds'])) {
            $model->relObjectIds = $map['relObjectIds'];
        }

        if (isset($map['relObjectType'])) {
            $model->relObjectType = $map['relObjectType'];
        }

        return $model;
    }
}
