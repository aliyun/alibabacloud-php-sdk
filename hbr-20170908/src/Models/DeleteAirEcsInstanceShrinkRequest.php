<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteAirEcsInstanceShrinkRequest extends Model
{
    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * @example i-uf6ir9y******hvisj
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The data sources for which the client needs to be uninstalled.
     *
     * @var string
     */
    public $uninstallClientSourceTypesShrink;
    protected $_name = [
        'ecsInstanceId' => 'EcsInstanceId',
        'uninstallClientSourceTypesShrink' => 'UninstallClientSourceTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->uninstallClientSourceTypesShrink) {
            $res['UninstallClientSourceTypes'] = $this->uninstallClientSourceTypesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAirEcsInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['UninstallClientSourceTypes'])) {
            $model->uninstallClientSourceTypesShrink = $map['UninstallClientSourceTypes'];
        }

        return $model;
    }
}
