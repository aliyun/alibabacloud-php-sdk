<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DeleteAgenticDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceUuid;
    protected $_name = [
        'dataSourceUuid' => 'DataSourceUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceUuid) {
            $res['DataSourceUuid'] = $this->dataSourceUuid;
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
        if (isset($map['DataSourceUuid'])) {
            $model->dataSourceUuid = $map['DataSourceUuid'];
        }

        return $model;
    }
}
