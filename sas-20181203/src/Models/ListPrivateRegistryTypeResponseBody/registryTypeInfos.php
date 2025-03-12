<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryTypeResponseBody;

use AlibabaCloud\Tea\Model;

class registryTypeInfos extends Model
{
    /**
     * @description The number of image repositories.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the image repository type. Valid values:
     *
     *   **acr**: Container Registry
     *   **harbor**: Harbor
     *   **quay**: Quay
     *   **CI/CD**: Jenkins
     *
     * @example harbor
     *
     * @var string
     */
    public $registryType;
    protected $_name = [
        'count'        => 'Count',
        'registryType' => 'RegistryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registryTypeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        return $model;
    }
}
