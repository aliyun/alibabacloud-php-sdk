<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\sourceDataSourceSettings\dataSourceProperties;

class sourceDataSourceSettings extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var dataSourceProperties
     */
    public $dataSourceProperties;
    protected $_name = [
        'dataSourceName' => 'DataSourceName',
        'dataSourceProperties' => 'DataSourceProperties',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceProperties) {
            $this->dataSourceProperties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->dataSourceProperties) {
            $res['DataSourceProperties'] = null !== $this->dataSourceProperties ? $this->dataSourceProperties->toArray($noStream) : $this->dataSourceProperties;
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
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DataSourceProperties'])) {
            $model->dataSourceProperties = dataSourceProperties::fromMap($map['DataSourceProperties']);
        }

        return $model;
    }
}
