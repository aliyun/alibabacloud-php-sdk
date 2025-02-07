<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterAddonMetadataResponseBody extends Model
{
    /**
     * @var string
     */
    public $configSchema;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'configSchema' => 'config_schema',
        'name'         => 'name',
        'version'      => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configSchema) {
            $res['config_schema'] = $this->configSchema;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['config_schema'])) {
            $model->configSchema = $map['config_schema'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
