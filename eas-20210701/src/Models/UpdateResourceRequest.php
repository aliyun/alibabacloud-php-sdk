<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest\selfManagedResourceOptions;
use AlibabaCloud\Tea\Model;

class UpdateResourceRequest extends Model
{
    /**
     * @description The new name of the resource group after the update. The name can be up to 27 characters in length.
     *
     * @example iot
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The configurable options for self managed resource group.
     *
     * @var selfManagedResourceOptions
     */
    public $selfManagedResourceOptions;
    protected $_name = [
        'resourceName'               => 'ResourceName',
        'selfManagedResourceOptions' => 'SelfManagedResourceOptions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->selfManagedResourceOptions) {
            $res['SelfManagedResourceOptions'] = null !== $this->selfManagedResourceOptions ? $this->selfManagedResourceOptions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceRequest
     */
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
