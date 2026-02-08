<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class DeleteMaterialTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $taskIdsShrink;
    protected $_name = [
        'taskIdsShrink' => 'TaskIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskIdsShrink) {
            $res['TaskIds'] = $this->taskIdsShrink;
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
        if (isset($map['TaskIds'])) {
            $model->taskIdsShrink = $map['TaskIds'];
        }

        return $model;
    }
}
