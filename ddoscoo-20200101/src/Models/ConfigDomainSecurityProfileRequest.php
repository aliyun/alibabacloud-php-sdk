<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigDomainSecurityProfileRequest extends Model
{
    /**
     * @var string
     */
    public $cluster;

    /**
     * @description This parameter is required.
     *
     * @example {\\"global_rule_mode\\":\\"hard\\"}
     *
     * @var string
     */
    public $config;

    /**
     * @description This parameter is required.
     *
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
