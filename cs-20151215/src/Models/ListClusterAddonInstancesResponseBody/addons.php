<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class addons extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'name'    => 'name',
        'state'   => 'state',
        'version' => 'version',
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

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
