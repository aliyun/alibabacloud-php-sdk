<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The keys in the filter. Valid values:
     *
     *   **regionId**: the ID of a region
     *   **planId**: the ID of a backup plan
     *   **sourceType**: the type of a data source
     *   **vaultId**: the ID of a backup vault
     *   **instanceName**: the name of an instance
     *   **instanceId**: the ID of an instance
     *   **planName**: the name of a backup plan
     *
     * @example vaultId
     *
     * @var string
     */
    public $key;

    /**
     * @description The values that you want to match in the filter.
     *
     * @example ["v-*********************"]
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'key'    => 'Key',
        'values' => 'Values',
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
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
