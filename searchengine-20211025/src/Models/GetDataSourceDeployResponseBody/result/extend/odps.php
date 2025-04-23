<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend;

use AlibabaCloud\Dara\Model;

class odps extends Model
{
    /**
     * @var string[]
     */
    public $partitions;
    protected $_name = [
        'partitions' => 'partitions',
    ];

    public function validate()
    {
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->partitions) {
            if (\is_array($this->partitions)) {
                $res['partitions'] = [];
                foreach ($this->partitions as $key1 => $value1) {
                    $res['partitions'][$key1] = $value1;
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
        if (isset($map['partitions'])) {
            if (!empty($map['partitions'])) {
                $model->partitions = [];
                foreach ($map['partitions'] as $key1 => $value1) {
                    $model->partitions[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
