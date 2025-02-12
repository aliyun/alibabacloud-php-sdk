<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\Dara\Model;

class clusterCustomConfiguration extends Model
{
    /**
     * @var string
     */
    public $args;
    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'args'   => 'Args',
        'script' => 'Script',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
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
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
