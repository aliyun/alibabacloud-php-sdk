<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoriesResponseBody;

use AlibabaCloud\Dara\Model;

class memories extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $memoryId;
    protected $_name = [
        'description' => 'description',
        'memoryId' => 'memoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->memoryId) {
            $res['memoryId'] = $this->memoryId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['memoryId'])) {
            $model->memoryId = $map['memoryId'];
        }

        return $model;
    }
}
