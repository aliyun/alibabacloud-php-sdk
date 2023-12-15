<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaDetailResponseBody\result\responses;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaDetailResponseBody\result\responses\properties\dataSource;
use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var dataSource[]
     */
    public $dataSource;
    protected $_name = [
        'count'      => 'Count',
        'dataSource' => 'DataSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = [];
            if (null !== $this->dataSource && \is_array($this->dataSource)) {
                $n = 0;
                foreach ($this->dataSource as $item) {
                    $res['DataSource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return properties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DataSource'])) {
            if (!empty($map['DataSource'])) {
                $model->dataSource = [];
                $n                 = 0;
                foreach ($map['DataSource'] as $item) {
                    $model->dataSource[$n++] = null !== $item ? dataSource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
