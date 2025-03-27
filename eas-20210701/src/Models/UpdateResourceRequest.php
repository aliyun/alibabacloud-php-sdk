<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest\selfManagedResourceOptions;

class UpdateResourceRequest extends Model
{
    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var selfManagedResourceOptions
     */
    public $selfManagedResourceOptions;
    protected $_name = [
        'resourceName' => 'ResourceName',
        'selfManagedResourceOptions' => 'SelfManagedResourceOptions',
    ];

    public function validate()
    {
        if (null !== $this->selfManagedResourceOptions) {
            $this->selfManagedResourceOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->selfManagedResourceOptions) {
            $res['SelfManagedResourceOptions'] = null !== $this->selfManagedResourceOptions ? $this->selfManagedResourceOptions->toArray($noStream) : $this->selfManagedResourceOptions;
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
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['SelfManagedResourceOptions'])) {
            $model->selfManagedResourceOptions = selfManagedResourceOptions::fromMap($map['SelfManagedResourceOptions']);
        }

        return $model;
    }
}
