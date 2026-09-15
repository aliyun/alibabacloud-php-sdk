<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ConnectorRuntime extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $satelliteId;
    protected $_name = [
        'mode' => 'mode',
        'pluginId' => 'pluginId',
        'satelliteId' => 'satelliteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        if (null !== $this->satelliteId) {
            $res['satelliteId'] = $this->satelliteId;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        if (isset($map['satelliteId'])) {
            $model->satelliteId = $map['satelliteId'];
        }

        return $model;
    }
}
