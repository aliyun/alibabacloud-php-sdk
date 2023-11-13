<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyTlsConfigRequest extends Model
{
    /**
     * @description The details of the TLS policy. The value is a JSON string that contains the following fields:
     *
     *   **ssl_protocols**: the version of TLS. This field is required. Data type: string. Valid values:
     *
     *   **tls1.0**: TLS 1.0 and later
     *   **tls1.1**: TLS 1.1 and later
     *   **tls1.2**: TLS 1.2 and later
     *
     *   **ssl_ciphers**: the type of the cipher suite. This field is required. Data type: string. Valid values:
     *
     *   **all**: all cipher suites, which include strong and weak cipher suites
     *   **improved**: enhanced cipher suites
     *   **strong**: strong cipher suites
     *   **default**: default cipher suites, which include only strong cipher suites
     *
     * @example {"ssl_protocols":"tls1.0","ssl_ciphers":"all"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The domain name of the website.
     *
     * > A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'config'          => 'Config',
        'domain'          => 'Domain',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTlsConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
