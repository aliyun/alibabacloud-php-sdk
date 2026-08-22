<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchInfoResponseBody\data\instance;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchInfoResponseBody\data\spec;

class data extends Model
{
    /**
     * @var instance
     */
    public $instance;

    /**
     * @var spec
     */
    public $spec;
    protected $_name = [
        'instance' => 'Instance',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        if (null !== $this->instance) {
            $this->instance->validate();
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toArray($noStream) : $this->instance;
        }

        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
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
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }

        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }

        return $model;
    }
}
