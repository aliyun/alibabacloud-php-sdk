<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody\supportedModuleResponse\supportedModules;
use AlibabaCloud\Tea\Model;

class supportedModuleResponse extends Model
{
    /**
     * @description The modules supported by the cloud service provider.
     *
     * @var supportedModules[]
     */
    public $supportedModules;

    /**
     * @description The cloud service provider. Valid values:
     *
     *   **Tencent**: Tencent Cloud
     *   **HUAWEICLOUD**:Huawei Cloud
     *   **Azure**: Microsoft Azure
     *   **AWS**: Amazon Web Services (AWS)
     *
     * @example Tencent
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'supportedModules' => 'SupportedModules',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedModules) {
            $res['SupportedModules'] = [];
            if (null !== $this->supportedModules && \is_array($this->supportedModules)) {
                $n = 0;
                foreach ($this->supportedModules as $item) {
                    $res['SupportedModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedModuleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedModules'])) {
            if (!empty($map['SupportedModules'])) {
                $model->supportedModules = [];
                $n                       = 0;
                foreach ($map['SupportedModules'] as $item) {
                    $model->supportedModules[$n++] = null !== $item ? supportedModules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
