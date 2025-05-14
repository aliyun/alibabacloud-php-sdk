<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest;

use AlibabaCloud\Dara\Model;

class trainingSetConfig extends Model
{
    /**
     * @var mixed[][]
     */
    public $partitions;
    protected $_name = [
        'partitions' => 'Partitions',
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
                $res['Partitions'] = [];
                foreach ($this->partitions as $key1 => $value1) {
                    $res['Partitions'][$key1] = $value1;
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
        if (isset($map['Partitions'])) {
            if (!empty($map['Partitions'])) {
                $model->partitions = [];
                foreach ($map['Partitions'] as $key1 => $value1) {
                    $model->partitions[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
