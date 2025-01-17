<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas\metaDataFields;

class metaDatas extends Model
{
    /**
     * @var int
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $dataSourceName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var metaDataFields[]
     */
    public $metaDataFields;
    protected $_name = [
        'dataSourceId'   => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'description'    => 'Description',
        'metaDataFields' => 'MetaDataFields',
    ];

    public function validate()
    {
        if (\is_array($this->metaDataFields)) {
            Model::validateArray($this->metaDataFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->metaDataFields) {
            if (\is_array($this->metaDataFields)) {
                $res['MetaDataFields'] = [];
                $n1                    = 0;
                foreach ($this->metaDataFields as $item1) {
                    $res['MetaDataFields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MetaDataFields'])) {
            if (!empty($map['MetaDataFields'])) {
                $model->metaDataFields = [];
                $n1                    = 0;
                foreach ($map['MetaDataFields'] as $item1) {
                    $model->metaDataFields[$n1++] = metaDataFields::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
