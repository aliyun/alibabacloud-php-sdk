<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\PermissionPolicy\allow;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\PermissionPolicy\deny;

class PermissionPolicy extends Model
{
    /**
     * @var allow
     */
    public $allow;

    /**
     * @var int
     */
    public $catalogVersion;

    /**
     * @var deny
     */
    public $deny;

    /**
     * @var int
     */
    public $schemaVersion;
    protected $_name = [
        'allow' => 'allow',
        'catalogVersion' => 'catalogVersion',
        'deny' => 'deny',
        'schemaVersion' => 'schemaVersion',
    ];

    public function validate()
    {
        if (null !== $this->allow) {
            $this->allow->validate();
        }
        if (null !== $this->deny) {
            $this->deny->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allow) {
            $res['allow'] = null !== $this->allow ? $this->allow->toArray($noStream) : $this->allow;
        }

        if (null !== $this->catalogVersion) {
            $res['catalogVersion'] = $this->catalogVersion;
        }

        if (null !== $this->deny) {
            $res['deny'] = null !== $this->deny ? $this->deny->toArray($noStream) : $this->deny;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
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
        if (isset($map['allow'])) {
            $model->allow = allow::fromMap($map['allow']);
        }

        if (isset($map['catalogVersion'])) {
            $model->catalogVersion = $map['catalogVersion'];
        }

        if (isset($map['deny'])) {
            $model->deny = deny::fromMap($map['deny']);
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        return $model;
    }
}
