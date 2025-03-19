<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig\containerServiceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig\functionConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig\mseNacosConfigs;
use AlibabaCloud\Tea\Model;

class cloudProductConfig extends Model
{
    /**
     * @example FC
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudProductType) {
            $res['cloudProductType'] = $this->cloudProductType;
        }
        if (null !== $this->containerServiceConfigs) {
            $res['containerServiceConfigs'] = [];
            if (null !== $this->containerServiceConfigs && \is_array($this->containerServiceConfigs)) {
                $n = 0;
                foreach ($this->containerServiceConfigs as $item) {
                    $res['containerServiceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->functionConfigs) {
            $res['functionConfigs'] = [];
            if (null !== $this->functionConfigs && \is_array($this->functionConfigs)) {
                $n = 0;
                foreach ($this->functionConfigs as $item) {
                    $res['functionConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mseNacosConfigs) {
            $res['mseNacosConfigs'] = [];
            if (null !== $this->mseNacosConfigs && \is_array($this->mseNacosConfigs)) {
                $n = 0;
                foreach ($this->mseNacosConfigs as $item) {
                    $res['mseNacosConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudProductConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cloudProductType'])) {
            $model->cloudProductType = $map['cloudProductType'];
        }
        if (isset($map['containerServiceConfigs'])) {
            if (!empty($map['containerServiceConfigs'])) {
                $model->containerServiceConfigs = [];
                $n = 0;
                foreach ($map['containerServiceConfigs'] as $item) {
                    $model->containerServiceConfigs[$n++] = null !== $item ? containerServiceConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['functionConfigs'])) {
            if (!empty($map['functionConfigs'])) {
                $model->functionConfigs = [];
                $n = 0;
                foreach ($map['functionConfigs'] as $item) {
                    $model->functionConfigs[$n++] = null !== $item ? functionConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['mseNacosConfigs'])) {
            if (!empty($map['mseNacosConfigs'])) {
                $model->mseNacosConfigs = [];
                $n = 0;
                foreach ($map['mseNacosConfigs'] as $item) {
                    $model->mseNacosConfigs[$n++] = null !== $item ? mseNacosConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
