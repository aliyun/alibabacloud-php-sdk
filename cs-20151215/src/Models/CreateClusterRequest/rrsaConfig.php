<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;

class rrsaConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
