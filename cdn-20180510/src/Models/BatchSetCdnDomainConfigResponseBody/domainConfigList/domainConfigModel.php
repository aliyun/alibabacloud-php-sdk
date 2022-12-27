<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainConfigResponseBody\domainConfigList;

use AlibabaCloud\Tea\Model;

class domainConfigModel extends Model
{
    /**
     * @description The ID of the configuration.
     *
     * @example 1234567
     *
     * @var int
     */
    public $configId;

    /**
     * @description The domain name.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the feature.
     *
     * @example set_resp_header
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'configId'     => 'ConfigId',
        'domainName'   => 'DomainName',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfigModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
