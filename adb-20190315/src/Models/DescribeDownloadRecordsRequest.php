<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadRecordsRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the detailed information of all AnalyticDB for MySQL clusters within a specific region, including cluster IDs.
     * @example am-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The languages available for file titles and some error messages. Default value: zh. Valid values:
     *
     *   **zh**: Simplified Chinese
     *   **en**: English
     *   **ja**: Japanese
     *   **zh-tw**: Traditional Chinese
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the regions and zones supported by AnalyticDB for MySQL, including region IDs.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'lang'        => 'Lang',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
