<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest\extend;

use AlibabaCloud\Tea\Model;

class odps extends Model
{
    /**
     * @description The partitions in the MaxCompute table.
     *
     * @var string[]
     */
    public $partitions;
    protected $_name = [
        'partitions' => 'partitions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitions) {
            $res['partitions'] = $this->partitions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return odps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['partitions'])) {
            $model->partitions = $map['partitions'];
        }

        return $model;
    }
}
