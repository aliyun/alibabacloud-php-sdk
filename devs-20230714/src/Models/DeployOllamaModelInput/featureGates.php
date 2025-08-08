<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployOllamaModelInput;

use AlibabaCloud\Dara\Model;

class featureGates extends Model
{
    /**
     * @var bool
     */
    public $asyncProvisionCheck;

    /**
     * @var bool
     */
    public $disableRollbackOnProvisionFailure;
    protected $_name = [
        'asyncProvisionCheck' => 'asyncProvisionCheck',
        'disableRollbackOnProvisionFailure' => 'disableRollbackOnProvisionFailure',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncProvisionCheck) {
            $res['asyncProvisionCheck'] = $this->asyncProvisionCheck;
        }

        if (null !== $this->disableRollbackOnProvisionFailure) {
            $res['disableRollbackOnProvisionFailure'] = $this->disableRollbackOnProvisionFailure;
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
        if (isset($map['asyncProvisionCheck'])) {
            $model->asyncProvisionCheck = $map['asyncProvisionCheck'];
        }

        if (isset($map['disableRollbackOnProvisionFailure'])) {
            $model->disableRollbackOnProvisionFailure = $map['disableRollbackOnProvisionFailure'];
        }

        return $model;
    }
}
