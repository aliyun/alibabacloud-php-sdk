<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description Additional information about the data source.
     *
     * @example {\"doBackup\":false,\"diskName\":\"data_disk\",\"size\":100,\"type\":\"data\",\"category\":\"cloud_essd\",\"imageId\":\"\",\"device\":\"/dev/xvdb\",\"encrypted\":false}
     *
     * @var string
     */
    public $extra;

    /**
     * @description The ID of the data source.
     *
     * @example d-j6cgioir6m******lu4
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the data source. Only **UDM_DISK** may be returned.
     *
     * @example UDMDISK
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'extra'      => 'Extra',
        'resourceId' => 'ResourceId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
