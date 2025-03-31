<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HttpApiInfoByName extends Model
{
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
     * @var HttpApiApiInfo[]
     */
    public $versionedHttpApis;
    protected $_name = [
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
                    $res['versionedHttpApis'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->versionedHttpApis[$n1++] = HttpApiApiInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
