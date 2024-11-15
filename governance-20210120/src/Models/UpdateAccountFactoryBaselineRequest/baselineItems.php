<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\UpdateAccountFactoryBaselineRequest;

use AlibabaCloud\Tea\Model;

class baselineItems extends Model
{
    /**
     * @description The configurations of the baseline item. The value of this parameter is a JSON string.
     *
     * @example {\\"EnabledServices\\":[\\"CEN_TR\\",\\"CDT\\",\\"CMS\\",\\"KMS\\"]}
     *
     * @var string
     */
    public $config;

    /**
     * @description The name of the baseline item.
     *
     * @example ACS-BP_ACCOUNT_FACTORY_VPC
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the baseline item.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'  => 'Config',
        'name'    => 'Name',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
