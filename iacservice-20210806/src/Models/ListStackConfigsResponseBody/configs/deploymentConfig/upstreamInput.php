<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\deploymentConfig;

use AlibabaCloud\Dara\Model;

class upstreamInput extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'name' => 'name',
        'source' => 'source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
