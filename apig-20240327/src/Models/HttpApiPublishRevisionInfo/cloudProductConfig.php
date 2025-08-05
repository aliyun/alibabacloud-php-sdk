<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig\containerServiceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig\functionConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig\mseNacosConfigs;

class cloudProductConfig extends Model
{
    /**
     * @var string
     */
    public $cloudProductType;

    /**
     * @var containerServiceConfigs[]
     */
    public $containerServiceConfigs;

    /**
     * @var functionConfigs[]
     */
    public $functionConfigs;

    /**
     * @var mseNacosConfigs[]
     */
    public $mseNacosConfigs;
    protected $_name = [
        'cloudProductType' => 'cloudProductType',
        'containerServiceConfigs' => 'containerServiceConfigs',
        'functionConfigs' => 'functionConfigs',
        'mseNacosConfigs' => 'mseNacosConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->containerServiceConfigs)) {
            Model::validateArray($this->containerServiceConfigs);
        }
        if (\is_array($this->functionConfigs)) {
            Model::validateArray($this->functionConfigs);
        }
        if (\is_array($this->mseNacosConfigs)) {
            Model::validateArray($this->mseNacosConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudProductType) {
            $res['cloudProductType'] = $this->cloudProductType;
        }

        if (null !== $this->containerServiceConfigs) {
            if (\is_array($this->containerServiceConfigs)) {
                $res['containerServiceConfigs'] = [];
                $n1 = 0;
                foreach ($this->containerServiceConfigs as $item1) {
                    $res['containerServiceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->functionConfigs) {
            if (\is_array($this->functionConfigs)) {
                $res['functionConfigs'] = [];
                $n1 = 0;
                foreach ($this->functionConfigs as $item1) {
                    $res['functionConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mseNacosConfigs) {
            if (\is_array($this->mseNacosConfigs)) {
                $res['mseNacosConfigs'] = [];
                $n1 = 0;
                foreach ($this->mseNacosConfigs as $item1) {
                    $res['mseNacosConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['cloudProductType'])) {
            $model->cloudProductType = $map['cloudProductType'];
        }

        if (isset($map['containerServiceConfigs'])) {
            if (!empty($map['containerServiceConfigs'])) {
                $model->containerServiceConfigs = [];
                $n1 = 0;
                foreach ($map['containerServiceConfigs'] as $item1) {
                    $model->containerServiceConfigs[$n1] = containerServiceConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['functionConfigs'])) {
            if (!empty($map['functionConfigs'])) {
                $model->functionConfigs = [];
                $n1 = 0;
                foreach ($map['functionConfigs'] as $item1) {
                    $model->functionConfigs[$n1] = functionConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['mseNacosConfigs'])) {
            if (!empty($map['mseNacosConfigs'])) {
                $model->mseNacosConfigs = [];
                $n1 = 0;
                foreach ($map['mseNacosConfigs'] as $item1) {
                    $model->mseNacosConfigs[$n1] = mseNacosConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
