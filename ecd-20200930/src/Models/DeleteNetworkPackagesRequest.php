<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkPackagesRequest extends Model
{
    /**
     * @var string[]
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
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
     * @return DeleteNetworkPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPackageId'])) {
            if (!empty($map['NetworkPackageId'])) {
                $model->networkPackageId = $map['NetworkPackageId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
