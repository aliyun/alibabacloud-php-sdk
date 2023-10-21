<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitorResourceQuotaAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to return information about used quotas. Valid values:
     *
     *   true (default): yes
     *   false: no
     *
     * @example true
     *
     * @var bool
     */
    public $showUsed;
    protected $_name = [
        'regionId' => 'RegionId',
        'showUsed' => 'ShowUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showUsed) {
            $res['ShowUsed'] = $this->showUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorResourceQuotaAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowUsed'])) {
            $model->showUsed = $map['ShowUsed'];
        }

        return $model;
    }
}
