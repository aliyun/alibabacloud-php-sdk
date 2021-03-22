<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigStatusResponseBody\result;

use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @var string
     */
    public $configStatus;
    protected $_name = [
        'configStatus' => 'ConfigStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }

        return $model;
    }
}
