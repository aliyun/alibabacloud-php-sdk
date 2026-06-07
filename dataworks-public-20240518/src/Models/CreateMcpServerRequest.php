<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateMcpServerRequest\config;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateMcpServerRequest\visibilityScope;

class CreateMcpServerRequest extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var visibilityScope
     */
    public $visibilityScope;
    protected $_name = [
        'config' => 'Config',
        'name' => 'Name',
        'visibility' => 'Visibility',
        'visibilityScope' => 'VisibilityScope',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->visibilityScope) {
            $this->visibilityScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        if (null !== $this->visibilityScope) {
            $res['VisibilityScope'] = null !== $this->visibilityScope ? $this->visibilityScope->toArray($noStream) : $this->visibilityScope;
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
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['VisibilityScope'])) {
            $model->visibilityScope = visibilityScope::fromMap($map['VisibilityScope']);
        }

        return $model;
    }
}
