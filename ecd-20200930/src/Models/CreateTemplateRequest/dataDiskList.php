<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest;

use AlibabaCloud\Tea\Model;

class dataDiskList extends Model
{
    /**
     * @example AutoPL
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDiskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
