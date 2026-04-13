<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class DeleteStackRequest extends Model
{
    /**
     * @var bool
     */
    public $cleanResources;
    protected $_name = [
        'cleanResources' => 'cleanResources',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleanResources) {
            $res['cleanResources'] = $this->cleanResources;
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
        if (isset($map['cleanResources'])) {
            $model->cleanResources = $map['cleanResources'];
        }

        return $model;
    }
}
