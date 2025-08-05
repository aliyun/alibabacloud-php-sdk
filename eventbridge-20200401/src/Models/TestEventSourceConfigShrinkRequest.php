<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class TestEventSourceConfigShrinkRequest extends Model
{
    /**
     * @description The parameters that are configured if you specify MySQL as the event source.
     *
     * @var string
     */
    public $sourceMySQLParametersShrink;
    protected $_name = [
        'sourceMySQLParametersShrink' => 'SourceMySQLParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceMySQLParametersShrink) {
            $res['SourceMySQLParameters'] = $this->sourceMySQLParametersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestEventSourceConfigShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceMySQLParameters'])) {
            $model->sourceMySQLParametersShrink = $map['SourceMySQLParameters'];
        }

        return $model;
    }
}
