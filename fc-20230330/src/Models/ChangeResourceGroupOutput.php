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
        'newResourceGroupId' => 'newResourceGroupId',
        'oldResourceGroupId' => 'oldResourceGroupId',
        'resourceId' => 'resourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['newResourceGroupId'] = $this->newResourceGroupId;
        }

        if (null !== $this->oldResourceGroupId) {
            $res['oldResourceGroupId'] = $this->oldResourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
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
        if (isset($map['newResourceGroupId'])) {
            $model->newResourceGroupId = $map['newResourceGroupId'];
        }

        if (isset($map['oldResourceGroupId'])) {
            $model->oldResourceGroupId = $map['oldResourceGroupId'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        return $model;
    }
}
