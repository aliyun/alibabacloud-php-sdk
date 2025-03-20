<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteHttpsBasicConfigurationRequest extends Model
{
    /**
     * @description ConfigId of the configuration, which can be obtained by calling the [ListHttpsBasicConfigurations](~~ListHttpsBasicConfigurations~~) interface.
     *
     * This parameter is required.
     *
     * @example 3528160969****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'configId' => 'ConfigId',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHttpsBasicConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
