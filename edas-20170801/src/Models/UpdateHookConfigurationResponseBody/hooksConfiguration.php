<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHookConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class hooksConfiguration extends Model
{
    /**
     * @var bool
     */
    public $ignoreFail;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'ignoreFail' => 'IgnoreFail',
        'name' => 'Name',
        'script' => 'Script',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreFail) {
            $res['IgnoreFail'] = $this->ignoreFail;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
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
        if (isset($map['IgnoreFail'])) {
            $model->ignoreFail = $map['IgnoreFail'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
