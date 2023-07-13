<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container\volumeMount;

use AlibabaCloud\Tea\Model;

class NFSVolume extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $server;
    protected $_name = [
        'path'     => 'Path',
        'readOnly' => 'ReadOnly',
        'server'   => 'Server',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NFSVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }

        return $model;
    }
}
