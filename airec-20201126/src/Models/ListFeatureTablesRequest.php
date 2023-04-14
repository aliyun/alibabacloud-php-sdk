<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureTablesRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example UserFeatureTable
     *
     * @var string
     */
    public $type;

    /**
     * @example 1
     *
     * @var string
     */
    public $updateFrequency;
    protected $_name = [
        'dataSourceId'    => 'dataSourceId',
        'type'            => 'type',
        'updateFrequency' => 'updateFrequency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updateFrequency) {
            $res['updateFrequency'] = $this->updateFrequency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updateFrequency'])) {
            $model->updateFrequency = $map['updateFrequency'];
        }

        return $model;
    }
}
