<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class DescribeMigrationJobCountRequest extends Model
{
    /**
     * @description 任务名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 源
     *
     * @var string
     */
    public $source;

    /**
     * @description 来源系统,MigrationJobTypeEnum[DTS,SMC,OSS,value,desc]
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'   => 'name',
        'source' => 'source',
        'type'   => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMigrationJobCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
