<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoriesResponseBody;

use AlibabaCloud\Tea\Model;

class memories extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 3fc531f4519444beaafffa4538f60667
     *
     * @var string
     */
    public $memoryId;
    protected $_name = [
        'description' => 'description',
        'memoryId'    => 'memoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return memories
     */
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
