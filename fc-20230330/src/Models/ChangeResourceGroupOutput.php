<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ChangeResourceGroupOutput extends Model
{
    /**
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @var string
     */
    public $oldResourceGroupId;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'newResourceGroupId' => 'NewResourceGroupId',
        'oldResourceGroupId' => 'OldResourceGroupId',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }

        if (null !== $this->oldResourceGroupId) {
            $res['OldResourceGroupId'] = $this->oldResourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }

        if (isset($map['OldResourceGroupId'])) {
            $model->oldResourceGroupId = $map['OldResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
