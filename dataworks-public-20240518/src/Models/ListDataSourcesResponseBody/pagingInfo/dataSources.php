<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesResponseBody\pagingInfo\dataSources\dataSource;
use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @var dataSource[]
     */
    public $dataSource;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example mysql
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSource' => 'DataSource',
        'name'       => 'Name',
        'type'       => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSources
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
