<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateMcpServerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customHeadersShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $transport;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $visibilityScopeShrink;
    protected $_name = [
        'customHeadersShrink' => 'CustomHeaders',
        'name' => 'Name',
        'transport' => 'Transport',
        'url' => 'Url',
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
        if (null !== $this->customHeadersShrink) {
            $res['CustomHeaders'] = $this->customHeadersShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->transport) {
            $res['Transport'] = $this->transport;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CustomHeaders'])) {
            $model->customHeadersShrink = $map['CustomHeaders'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Transport'])) {
            $model->transport = $map['Transport'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
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
