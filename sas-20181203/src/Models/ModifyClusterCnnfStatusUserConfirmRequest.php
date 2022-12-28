<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterCnnfStatusUserConfirmRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIds;

    /**
     * @var bool
     */
    public $userConfirm;
    protected $_name = [
        'clusterIds'  => 'ClusterIds',
        'userConfirm' => 'UserConfirm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->userConfirm) {
            $res['UserConfirm'] = $this->userConfirm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterCnnfStatusUserConfirmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }
        if (isset($map['UserConfirm'])) {
            $model->userConfirm = $map['UserConfirm'];
        }

        return $model;
    }
}
