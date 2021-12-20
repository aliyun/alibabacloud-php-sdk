<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyNetworkPackageEnabledRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enabled'          => 'Enabled',
        'networkPackageId' => 'NetworkPackageId',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('networkPackageId', $this->networkPackageId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNetworkPackageEnabledRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
