<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListDataSourceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListDataSourceResponseBody\dataSourceList\dataSource;
use AlibabaCloud\Tea\Model;

class dataSourceList extends Model
{
    /**
     * @var dataSource[]
     */
    public $dataSource;
    protected $_name = [
        'dataSource' => 'DataSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return dataSourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
