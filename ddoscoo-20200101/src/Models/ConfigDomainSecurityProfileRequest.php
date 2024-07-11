<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigDomainSecurityProfileRequest extends Model
{
    /**
     * @description This parameter is unavailable.
     *
     * @var string
     */
    public $cluster;

    /**
     * @description The configurations for the global mitigation policy feature. The configurations include the following fields:
     *
     *   **global_rule_mode**: optional. The mode for the global mitigation policy feature. Data type: string. Valid values:
     *
     *   **weak**: loose.
     *   **default**: normal.
     *   **hard**: strict.
     *
     *   **global_rule_enable**: optional. Specifies whether to enable the global mitigation policy feature. Data type: string. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *
     * This parameter is required.
     * @example {\\"global_rule_mode\\":\\"hard\\"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The domain name of the website.
     *
     * This parameter is required.
     * @example live.abcde.com
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'cluster' => 'Cluster',
        'config'  => 'Config',
        'domain'  => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigDomainSecurityProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
