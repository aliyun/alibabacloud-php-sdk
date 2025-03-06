<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request\rules;

use AlibabaCloud\Tea\Model;

class dataSourceFilters extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @var string[]
     */
    public $dataSourceIds;

    /**
     * @description The type of the data source. Valid value:
     *
     *   **UDM_ECS**: Elastic Compute Service (ECS) instance This type of data source is supported only if the **PolicyType** parameter is set to **UDM_ECS_ONLY**.
     *   **OSS**: Object Storage Service (OSS) bucket This type of data source is supported only if the **PolicyType** parameter is set to **STANDARD**.
     *   **NAS**: File Storage NAS (NAS) file system This type of data source is supported only if the **PolicyType** parameter is set to **STANDARD**.
     *   **ECS_FILE**: ECS file This type of data source is supported only if the **PolicyType** parameter is set to **STANDARD**.
     *   **OTS**: Tablestore instance This type of data source is supported only if the **PolicyType** parameter is set to **STANDARD**.
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceIds' => 'DataSourceIds',
        'sourceType'    => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceIds) {
            $res['DataSourceIds'] = $this->dataSourceIds;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceIds'])) {
            if (!empty($map['DataSourceIds'])) {
                $model->dataSourceIds = $map['DataSourceIds'];
            }
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
