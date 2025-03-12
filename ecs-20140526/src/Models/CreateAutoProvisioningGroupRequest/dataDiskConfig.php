<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;

use AlibabaCloud\Tea\Model;

class dataDiskConfig extends Model
{
    /**
     * @description The category of data disk N. You can use this parameter to specify multiple disk categories, and the disk categories are prioritized in the order in which they are specified. If a specified disk category is unavailable, the system uses the next available disk category. Valid values:
     *
     * - cloud: basic disk
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskCategory;
    protected $_name = [
        'diskCategory' => 'DiskCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDiskConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }

        return $model;
    }
}
