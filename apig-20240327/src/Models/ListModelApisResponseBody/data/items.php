<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListModelApisResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiListApiInfo;

class items extends Model
{
    /**
     * @var string
     */
    public $creationMode;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $versionEnabled;

    /**
     * @var ModelApiListApiInfo[]
     */
    public $versionedHttpApis;
    protected $_name = [
        'creationMode' => 'creationMode',
        'gatewayId' => 'gatewayId',
        'name' => 'name',
        'type' => 'type',
        'versionEnabled' => 'versionEnabled',
        'versionedHttpApis' => 'versionedHttpApis',
    ];

    public function validate()
    {
        if (\is_array($this->versionedHttpApis)) {
            Model::validateArray($this->versionedHttpApis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationMode) {
            $res['creationMode'] = $this->creationMode;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->versionEnabled) {
            $res['versionEnabled'] = $this->versionEnabled;
        }

        if (null !== $this->versionedHttpApis) {
            if (\is_array($this->versionedHttpApis)) {
                $res['versionedHttpApis'] = [];
                $n1 = 0;
                foreach ($this->versionedHttpApis as $item1) {
                    $res['versionedHttpApis'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['creationMode'])) {
            $model->creationMode = $map['creationMode'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['versionEnabled'])) {
            $model->versionEnabled = $map['versionEnabled'];
        }

        if (isset($map['versionedHttpApis'])) {
            if (!empty($map['versionedHttpApis'])) {
                $model->versionedHttpApis = [];
                $n1 = 0;
                foreach ($map['versionedHttpApis'] as $item1) {
                    $model->versionedHttpApis[$n1] = ModelApiListApiInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
