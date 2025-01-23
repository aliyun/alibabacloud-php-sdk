<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DeleteAirEcsInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $ecsInstanceId;
    /**
     * @var string[]
     */
    public $uninstallClientSourceTypes;
    protected $_name = [
        'ecsInstanceId'              => 'EcsInstanceId',
        'uninstallClientSourceTypes' => 'UninstallClientSourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->uninstallClientSourceTypes)) {
            Model::validateArray($this->uninstallClientSourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->uninstallClientSourceTypes) {
            if (\is_array($this->uninstallClientSourceTypes)) {
                $res['UninstallClientSourceTypes'] = [];
                $n1                                = 0;
                foreach ($this->uninstallClientSourceTypes as $item1) {
                    $res['UninstallClientSourceTypes'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['UninstallClientSourceTypes'])) {
                $model->uninstallClientSourceTypes = [];
                $n1                                = 0;
                foreach ($map['UninstallClientSourceTypes'] as $item1) {
                    $model->uninstallClientSourceTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
