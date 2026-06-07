<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateMcpServerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $visibilityScopeShrink;
    protected $_name = [
        'configShrink' => 'Config',
        'name' => 'Name',
        'visibility' => 'Visibility',
        'visibilityScopeShrink' => 'VisibilityScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configShrink) {
            $res['Config'] = $this->configShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        if (null !== $this->visibilityScopeShrink) {
            $res['VisibilityScope'] = $this->visibilityScopeShrink;
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
            $model->configShrink = $map['Config'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['VisibilityScope'])) {
            $model->visibilityScopeShrink = $map['VisibilityScope'];
        }

        return $model;
    }
}
