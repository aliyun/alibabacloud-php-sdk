<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHookConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class hooksConfiguration extends Model
{
    /**
     * @description Indicates whether a mount failure is ignored. Valid values:
     *
     *   **true**: A mount failure is ignored.
     *   **false**: A mount failure is not ignored.
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreFail;

    /**
     * @description The name of the mounted script.
     *
     * @example postprepareInstanceEnvironmentOnScaleOut
     *
     * @var string
     */
    public $name;

    /**
     * @description The content of the mounted script.
     *
     * @example ls
     *
     * @var string
     */
    public $script;
    protected $_name = [
        'ignoreFail' => 'IgnoreFail',
        'name'       => 'Name',
        'script'     => 'Script',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return hooksConfiguration
     */
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
