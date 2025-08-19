<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponseBody\logging;

class GetClusterAddonInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var logging
     */
    public $logging;

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
        'config' => 'config',
        'logging' => 'logging',
        'name' => 'name',
        'state' => 'state',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->logging) {
            $this->logging->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toArray($noStream) : $this->logging;
        }

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
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['logging'])) {
            $model->logging = logging::fromMap($map['logging']);
        }

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
