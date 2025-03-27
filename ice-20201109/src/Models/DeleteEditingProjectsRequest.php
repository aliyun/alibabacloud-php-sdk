<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteEditingProjectsRequest extends Model
{
    /**
     * @var string
     */
    public $projectIds;
    protected $_name = [
        'projectIds' => 'ProjectIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
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
        if (isset($map['ProjectIds'])) {
            $model->projectIds = $map['ProjectIds'];
        }

        return $model;
    }
}
