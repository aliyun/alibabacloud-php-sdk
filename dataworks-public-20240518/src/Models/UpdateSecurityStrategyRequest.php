<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateSecurityStrategyRequest\content;

class UpdateSecurityStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var content
     */
    public $content;

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
     * @var int[]
     */
    public $workspaces;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'content' => 'Content',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'workspaces' => 'Workspaces',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->workspaces)) {
            Model::validateArray($this->workspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
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

        if (null !== $this->workspaces) {
            if (\is_array($this->workspaces)) {
                $res['Workspaces'] = [];
                $n1 = 0;
                foreach ($this->workspaces as $item1) {
                    $res['Workspaces'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
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
            if (!empty($map['Workspaces'])) {
                $model->workspaces = [];
                $n1 = 0;
                foreach ($map['Workspaces'] as $item1) {
                    $model->workspaces[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
