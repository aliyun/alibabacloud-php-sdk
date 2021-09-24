<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataSourceRequest extends Model
{
    /**
     * @var int
     */
    public $dataSourceId;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
    ];

    public function validate()
    {
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        return $model;
    }
}
