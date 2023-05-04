<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainConfigResponseBody\domainConfigList;

use AlibabaCloud\Tea\Model;

class domainConfigModel extends Model
{
    /**
     * @description The name of the feature.
     *
     * @example 1234567
     *
     * @var int
     */
    public $configId;

    /**
     * @description > *   You can call this operation up to 30 times per second per account.
     *   You can specify multiple domain names and must separate them with commas (,). You can specify up to 50 domain names in each call.
     *   If the BatchSetCdnDomainConfig operation is successful, a unique configuration ID (ConfigId) is generated. You can use configuration IDs to update or delete configurations. For more information, see [Usage notes on ConfigId](~~388994~~).
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The list of domain configurations.
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
