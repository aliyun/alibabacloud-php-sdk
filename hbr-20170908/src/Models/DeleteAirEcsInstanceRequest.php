<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteAirEcsInstanceRequest extends Model
{
    /**
     * @description The ID of the ECS instance.
     *
     * @example i-uf6ir9y******hvisj
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The data sources for which the client needs to be uninstalled.
     *
     * @var string[]
     */
    public $uninstallClientSourceTypes;
    protected $_name = [
        'ecsInstanceId'              => 'EcsInstanceId',
        'uninstallClientSourceTypes' => 'UninstallClientSourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->uninstallClientSourceTypes) {
            $res['UninstallClientSourceTypes'] = $this->uninstallClientSourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAirEcsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['UninstallClientSourceTypes'])) {
            if (!empty($map['UninstallClientSourceTypes'])) {
                $model->uninstallClientSourceTypes = $map['UninstallClientSourceTypes'];
            }
        }

        return $model;
    }
}
