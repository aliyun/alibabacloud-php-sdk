<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateApiKeyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceIdsShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'Description',
        'keyName' => 'KeyName',
        'regionId' => 'RegionId',
        'serviceIdsShrink' => 'ServiceIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceIdsShrink) {
            $res['ServiceIds'] = $this->serviceIdsShrink;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceIds'])) {
            $model->serviceIdsShrink = $map['ServiceIds'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
