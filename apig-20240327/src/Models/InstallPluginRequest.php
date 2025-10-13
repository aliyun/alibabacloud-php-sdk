<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class InstallPluginRequest extends Model
{
    /**
     * @var string[]
     */
    public $gatewayIds;

    /**
     * @var string
     */
    public $pluginClassId;
    protected $_name = [
        'gatewayIds' => 'gatewayIds',
        'pluginClassId' => 'pluginClassId',
    ];

    public function validate()
    {
        if (\is_array($this->gatewayIds)) {
            Model::validateArray($this->gatewayIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayIds) {
            if (\is_array($this->gatewayIds)) {
                $res['gatewayIds'] = [];
                $n1 = 0;
                foreach ($this->gatewayIds as $item1) {
                    $res['gatewayIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pluginClassId) {
            $res['pluginClassId'] = $this->pluginClassId;
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
        if (isset($map['gatewayIds'])) {
            if (!empty($map['gatewayIds'])) {
                $model->gatewayIds = [];
                $n1 = 0;
                foreach ($map['gatewayIds'] as $item1) {
                    $model->gatewayIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pluginClassId'])) {
            $model->pluginClassId = $map['pluginClassId'];
        }

        return $model;
    }
}
