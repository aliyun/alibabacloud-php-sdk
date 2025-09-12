<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\readinessProbe;

use AlibabaCloud\Dara\Model;

class httpGet extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $scheme;
    protected $_name = [
        'path' => 'Path',
        'port' => 'Port',
        'scheme' => 'Scheme',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }

        return $model;
    }
}
