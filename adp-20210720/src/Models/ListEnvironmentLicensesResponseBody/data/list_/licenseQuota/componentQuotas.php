<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentLicensesResponseBody\data\list_\licenseQuota;

use AlibabaCloud\Tea\Model;

class componentQuotas extends Model
{
    /**
     * @example test-component
     *
     * @var string
     */
    public $componentName;

    /**
     * @example aliyun-inc.com
     *
     * @var string
     */
    public $componentSource;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceLimit;
    protected $_name = [
        'componentName'   => 'componentName',
        'componentSource' => 'componentSource',
        'instanceLimit'   => 'instanceLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }
        if (null !== $this->componentSource) {
            $res['componentSource'] = $this->componentSource;
        }
        if (null !== $this->instanceLimit) {
            $res['instanceLimit'] = $this->instanceLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentQuotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }
        if (isset($map['componentSource'])) {
            $model->componentSource = $map['componentSource'];
        }
        if (isset($map['instanceLimit'])) {
            $model->instanceLimit = $map['instanceLimit'];
        }

        return $model;
    }
}
