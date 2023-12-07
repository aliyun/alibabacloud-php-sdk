<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\MLLabelParam;

use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $config;

    /**
     * @example builtin
     *
     * @var string
     */
    public $mode;

    /**
     * @example Trace.RCA
     *
     * @var string
     */
    public $type;

    /**
     * @example 0.01
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'  => 'config',
        'mode'    => 'mode',
        'type'    => 'type',
        'version' => 'version',
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
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
