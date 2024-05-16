<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnDomainConfigsRequest extends Model
{
    /**
     * @description The ID of the configuration. For more information about ConfigId, see [Usage notes on ConfigId](https://help.aliyun.com/document_detail/388994.html).
     *
     * @example 6295
     *
     * @var string
     */
    public $configId;

    /**
     * @description The accelerated domain name. You can specify only one domain name in each request.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The names of the features. Separate multiple feature names with commas (,). For more information, see [Parameters for configuring features for domain names](https://help.aliyun.com/document_detail/388460.html).
     *
     * @example aliauth
     *
     * @var string
     */
    public $functionNames;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'configId'      => 'ConfigId',
        'domainName'    => 'DomainName',
        'functionNames' => 'FunctionNames',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->functionNames) {
            $res['FunctionNames'] = $this->functionNames;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnDomainConfigsRequest
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
        if (isset($map['FunctionNames'])) {
            $model->functionNames = $map['FunctionNames'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
