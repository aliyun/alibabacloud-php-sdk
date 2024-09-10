<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas\metaDataFields;
use AlibabaCloud\Tea\Model;

class metaDatas extends Model
{
    /**
     * @example 1753
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example sas_analysis_pre-sas-operation-log-sas-event-suspicious
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example dingtalk_suspicious
     *
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
    }

    public function toMap()
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
            $res['MetaDataFields'] = [];
            if (null !== $this->metaDataFields && \is_array($this->metaDataFields)) {
                $n = 0;
                foreach ($this->metaDataFields as $item) {
                    $res['MetaDataFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaDatas
     */
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
                $n                     = 0;
                foreach ($map['MetaDataFields'] as $item) {
                    $model->metaDataFields[$n++] = null !== $item ? metaDataFields::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
