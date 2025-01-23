<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DeleteAirEcsInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ecsInstanceId;
    /**
     * @var string
     */
    public $uninstallClientSourceTypesShrink;
    protected $_name = [
        'ecsInstanceId'                    => 'EcsInstanceId',
        'uninstallClientSourceTypesShrink' => 'UninstallClientSourceTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
