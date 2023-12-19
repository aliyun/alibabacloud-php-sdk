<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2Request;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The key in the filter. Valid values:
     *
     *   **RegionId**: the ID of a region
     *   **PlanId**: the ID of a backup plan
     *   **JobId**: the ID of a backup job
     *   **VaultId**: the ID of a backup vault
     *   **InstanceId**: the ID of an ECS instance
     *   **Bucket**: the name of an OSS bucket
     *   **FileSystemId**: the ID of a file system
     *   **Status**: the status of a backup job
     *   **CreatedTime**: the start time of a backup job
     *   **CompleteTime**: the end time of a backup job
     *   **InstanceName**: the name of a Tablestore instance
     *
     * @example VaultId
     *
     * @var string
     */
    public $key;

    /**
     * @description The matching method. Default value: IN. This parameter specifies the operator that you want to use to match a key and a value in the filter. Valid values:
     *
     *   **EQUAL**: equal to
     *   **NOT_EQUAL**: not equal to
     *   **GREATER_THAN**: greater than
     *   **GREATER_THAN_OR_EQUAL**: greater than or equal to
     *   **LESS_THAN**: less than
     *   **LESS_THAN_OR_EQUAL**: less than or equal to
     *   **BETWEEN**: specifies a JSON array as a range. The results must fall within the range in the `[Minimum value,Maximum value]` format.
     *   **IN**: specifies an array as a collection. The results must fall within the collection.
     *
     * > If you specify the **CompleteTime** parameter as a key to query backup jobs, you cannot use the IN operator to perform a match.
     * @example IN
     *
     * @var string
     */
    public $operator;

    /**
     * @description The variable values of the filter.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'key'      => 'Key',
        'operator' => 'Operator',
        'values'   => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
