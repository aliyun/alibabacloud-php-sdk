<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceInventoryResponseBody;

use AlibabaCloud\Tea\Model;

class resourceInventory extends Model
{
    /**
     * @description The download URL of the resource inventory.
     *
     * @example https://cloud-config-compliance-report.oss-cn-shanghai.aliyuncs.com/RESOURCE_INVENTORY/100931896542****\/100931896542****-RESOURCE_INVENTORY-202306251435.csv?Expires=1687678394&OSSAccessKeyId=STS.MNQ2xAAne86aVWG7WGx5f***&Signature=scdEN29shaKLcCOguj5%2FgrWIw%2FM%3D&security-token=BIASiQM1q3Ft5B2yfSjIr5bkedL7r****
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The time when the resource inventory was generated. The value is a timestamp.
     *
     * @example 1687674634220
     *
     * @var int
     */
    public $resourceInventoryGenerateTime;

    /**
     * @description The generation status of the resource inventory. Valid values:
     *
     *   CREATING: The resource inventory is being generated.
     *   COMPLETE: The resource inventory is generated.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'downloadUrl'                   => 'DownloadUrl',
        'resourceInventoryGenerateTime' => 'ResourceInventoryGenerateTime',
        'status'                        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->resourceInventoryGenerateTime) {
            $res['ResourceInventoryGenerateTime'] = $this->resourceInventoryGenerateTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInventory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ResourceInventoryGenerateTime'])) {
            $model->resourceInventoryGenerateTime = $map['ResourceInventoryGenerateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
