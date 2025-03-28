<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest;

use AlibabaCloud\Dara\Model;

class sourceDataSourceSettings extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string[]
     */
    public $dataSourceProperties;
    protected $_name = [
        'dataSourceName' => 'DataSourceName',
        'dataSourceProperties' => 'DataSourceProperties',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceProperties)) {
            Model::validateArray($this->dataSourceProperties);
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
            if (\is_array($this->dataSourceProperties)) {
                $res['DataSourceProperties'] = [];
                foreach ($this->dataSourceProperties as $key1 => $value1) {
                    $res['DataSourceProperties'][$key1] = $value1;
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
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DataSourceProperties'])) {
            if (!empty($map['DataSourceProperties'])) {
                $model->dataSourceProperties = [];
                foreach ($map['DataSourceProperties'] as $key1 => $value1) {
                    $model->dataSourceProperties[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
