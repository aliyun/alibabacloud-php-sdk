<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\SDK\Devs\V20230714\Models\EnvironmentSpec\serviceOverlay;
use AlibabaCloud\Tea\Model;

class EnvironmentSpec extends Model
{
    /**
     * @example dev
     *
     * @var string
     */
    public $alias;

    /**
     * @var InfraStackSpec
     */
    public $infraStackConfig;

    /**
     * @var bool
     */
    public $isAutoDeploy;

    /**
     * @var RepositoryConfig
     */
    public $repositoryConfig;

    /**
     * @example acs:ram::*******:role/aliyundevsdefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @var serviceOverlay
     */
    public $serviceOverlay;

    /**
     * @var TemplateConfig
     */
    public $templateConfig;

    /**
     * @example Testing
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'alias'            => 'alias',
        'infraStackConfig' => 'infraStackConfig',
        'isAutoDeploy'     => 'isAutoDeploy',
        'repositoryConfig' => 'repositoryConfig',
        'roleArn'          => 'roleArn',
        'serviceOverlay'   => 'serviceOverlay',
        'templateConfig'   => 'templateConfig',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->infraStackConfig) {
            $res['infraStackConfig'] = null !== $this->infraStackConfig ? $this->infraStackConfig->toMap() : null;
        }
        if (null !== $this->isAutoDeploy) {
            $res['isAutoDeploy'] = $this->isAutoDeploy;
        }
        if (null !== $this->repositoryConfig) {
            $res['repositoryConfig'] = null !== $this->repositoryConfig ? $this->repositoryConfig->toMap() : null;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->serviceOverlay) {
            $res['serviceOverlay'] = null !== $this->serviceOverlay ? $this->serviceOverlay->toMap() : null;
        }
        if (null !== $this->templateConfig) {
            $res['templateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnvironmentSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['infraStackConfig'])) {
            $model->infraStackConfig = InfraStackSpec::fromMap($map['infraStackConfig']);
        }
        if (isset($map['isAutoDeploy'])) {
            $model->isAutoDeploy = $map['isAutoDeploy'];
        }
        if (isset($map['repositoryConfig'])) {
            $model->repositoryConfig = RepositoryConfig::fromMap($map['repositoryConfig']);
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['serviceOverlay'])) {
            $model->serviceOverlay = serviceOverlay::fromMap($map['serviceOverlay']);
        }
        if (isset($map['templateConfig'])) {
            $model->templateConfig = TemplateConfig::fromMap($map['templateConfig']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
