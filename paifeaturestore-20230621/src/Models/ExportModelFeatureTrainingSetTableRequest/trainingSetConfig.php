<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitions) {
            $res['Partitions'] = $this->partitions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trainingSetConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Partitions'])) {
            $model->partitions = $map['Partitions'];
        }

        return $model;
    }
}
