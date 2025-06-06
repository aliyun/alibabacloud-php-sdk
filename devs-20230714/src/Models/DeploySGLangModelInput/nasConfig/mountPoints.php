<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeploySGLangModelInput\nasConfig;

use AlibabaCloud\Dara\Model;

class mountPoints extends Model
{
    /**
     * @var bool
     */
    public $enableTLS;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $serverAddr;
    protected $_name = [
        'enableTLS' => 'enableTLS',
        'mountDir' => 'mountDir',
        'serverAddr' => 'serverAddr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTLS) {
            $res['enableTLS'] = $this->enableTLS;
        }

        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }

        if (null !== $this->serverAddr) {
            $res['serverAddr'] = $this->serverAddr;
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
        if (isset($map['enableTLS'])) {
            $model->enableTLS = $map['enableTLS'];
        }

        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }

        if (isset($map['serverAddr'])) {
            $model->serverAddr = $map['serverAddr'];
        }

        return $model;
    }
}
