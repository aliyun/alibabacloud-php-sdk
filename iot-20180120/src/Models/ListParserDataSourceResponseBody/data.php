<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDataSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDataSourceResponseBody\data\dataSource;

class data extends Model
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
                    $res['DataSource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                    $model->dataSource[$n1] = dataSource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
