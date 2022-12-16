<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksRequest\body;

use AlibabaCloud\Tea\Model;

class migrateConfig extends Model
{
    /**
     * @example index=111
     *
     * @var string
     */
    public $sourceFilterParams;
    protected $_name = [
        'sourceFilterParams' => 'sourceFilterParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceFilterParams) {
            $res['sourceFilterParams'] = $this->sourceFilterParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sourceFilterParams'])) {
            $model->sourceFilterParams = $map['sourceFilterParams'];
        }

        return $model;
    }
}
