<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateSecurityStrategyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $workspacesShrink;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'contentShrink' => 'Content',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'workspacesShrink' => 'Workspaces',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->workspacesShrink) {
            $res['Workspaces'] = $this->workspacesShrink;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Workspaces'])) {
            $model->workspacesShrink = $map['Workspaces'];
        }

        return $model;
    }
}
