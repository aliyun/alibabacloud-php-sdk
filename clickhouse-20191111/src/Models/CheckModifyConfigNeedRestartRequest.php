<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckModifyConfigNeedRestartRequest extends Model
{
    /**
     * @description The configuration parameters whose settings are modified.
     *
     * This parameter is required.
     * @example <?xml version="1.0"?>
     * </yandex>
     * @var string
     */
    public $config;

    /**
     * @description The cluster ID. You can call the [DescribeDBClusters](https://help.aliyun.com/document_detail/170879.html) operation to query information about all the clusters that are deployed in a specific region. The information includes the cluster IDs.
     *
     * This parameter is required.
     * @example cc-bp1tm8zf130ew****
     *
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'config'      => 'Config',
        'DBClusterId' => 'DBClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckModifyConfigNeedRestartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        return $model;
    }
}
