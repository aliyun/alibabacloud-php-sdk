<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class DiscoverEventSourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sourceMySQLParametersShrink;
    protected $_name = [
        'sourceMySQLParametersShrink' => 'SourceMySQLParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceMySQLParametersShrink) {
            $res['SourceMySQLParameters'] = $this->sourceMySQLParametersShrink;
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
        if (isset($map['SourceMySQLParameters'])) {
            $model->sourceMySQLParametersShrink = $map['SourceMySQLParameters'];
        }

        return $model;
    }
}
