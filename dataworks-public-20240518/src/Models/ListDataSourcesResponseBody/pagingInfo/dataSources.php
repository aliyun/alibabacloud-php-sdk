<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourcesResponseBody\pagingInfo\dataSources\dataSource;

class dataSources extends Model
{
    /**
     * @var dataSource[]
     */
    public $dataSource;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSource' => 'DataSource',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->dataSource)) {
            Model::validateArray($this->dataSource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSource) {
            if (\is_array($this->dataSource)) {
                $res['DataSource'] = [];
                $n1 = 0;
                foreach ($this->dataSource as $item1) {
                    $res['DataSource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSource'])) {
            if (!empty($map['DataSource'])) {
                $model->dataSource = [];
                $n1 = 0;
                foreach ($map['DataSource'] as $item1) {
                    $model->dataSource[$n1++] = dataSource::fromMap($item1);
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
