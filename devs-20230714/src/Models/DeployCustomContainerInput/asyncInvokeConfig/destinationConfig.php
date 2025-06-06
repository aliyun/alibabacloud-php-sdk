<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\asyncInvokeConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\asyncInvokeConfig\destinationConfig\onFailure;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\asyncInvokeConfig\destinationConfig\onSuccess;

class destinationConfig extends Model
{
    /**
     * @var onFailure
     */
    public $onFailure;

    /**
     * @var onSuccess
     */
    public $onSuccess;
    protected $_name = [
        'onFailure' => 'onFailure',
        'onSuccess' => 'onSuccess',
    ];

    public function validate()
    {
        if (null !== $this->onFailure) {
            $this->onFailure->validate();
        }
        if (null !== $this->onSuccess) {
            $this->onSuccess->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onFailure) {
            $res['onFailure'] = null !== $this->onFailure ? $this->onFailure->toArray($noStream) : $this->onFailure;
        }

        if (null !== $this->onSuccess) {
            $res['onSuccess'] = null !== $this->onSuccess ? $this->onSuccess->toArray($noStream) : $this->onSuccess;
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
        if (isset($map['onFailure'])) {
            $model->onFailure = onFailure::fromMap($map['onFailure']);
        }

        if (isset($map['onSuccess'])) {
            $model->onSuccess = onSuccess::fromMap($map['onSuccess']);
        }

        return $model;
    }
}
