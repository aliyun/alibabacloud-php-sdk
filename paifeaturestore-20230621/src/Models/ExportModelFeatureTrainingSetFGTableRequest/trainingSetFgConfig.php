<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetFGTableRequest;

use AlibabaCloud\Tea\Model;

class trainingSetFgConfig extends Model
{
    /**
     * @example rank_v1_fg.json
     *
     * @var string
     */
    public $fgJsonName;

    /**
     * @example fg_on_odps-1.3.60-jar-with-dependencies.jar
     *
     * @var string
     */
    public $jarName;

    /**
     * @description This parameter is required.
     *
     * @var mixed[][]
     */
    public $partitions;
    protected $_name = [
        'fgJsonName' => 'FgJsonName',
        'jarName'    => 'JarName',
        'partitions' => 'Partitions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fgJsonName) {
            $res['FgJsonName'] = $this->fgJsonName;
        }
        if (null !== $this->jarName) {
            $res['JarName'] = $this->jarName;
        }
        if (null !== $this->partitions) {
            $res['Partitions'] = $this->partitions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trainingSetFgConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FgJsonName'])) {
            $model->fgJsonName = $map['FgJsonName'];
        }
        if (isset($map['JarName'])) {
            $model->jarName = $map['JarName'];
        }
        if (isset($map['Partitions'])) {
            $model->partitions = $map['Partitions'];
        }

        return $model;
    }
}
