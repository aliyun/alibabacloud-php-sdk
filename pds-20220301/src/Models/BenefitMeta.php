<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class BenefitMeta extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $quota;
    protected $_name = [
        'config'  => 'config',
        'enabled' => 'enabled',
        'quota'   => 'quota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BenefitMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }

        return $model;
    }
}
