<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ServiceSpec extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example my-env
     *
     * @var string
     */
    public $environment;

    /**
     * @example acs:ram::1455541096306548:role/aliyunfcdefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description This parameter is required.
     *
     * @example serverless-devs.com/alicloud-multi-functions/service-single-function/deployment
     *
     * @var string
     */
    public $template;

    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $templateVariables;

    /**
     * @example 1
     *
     * @var int
     */
    public $templateVersion;
    protected $_name = [
        'environment'       => 'environment',
        'roleArn'           => 'roleArn',
        'template'          => 'template',
        'templateVariables' => 'templateVariables',
        'templateVersion'   => 'templateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['environment'] = $this->environment;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->templateVariables) {
            $res['templateVariables'] = $this->templateVariables;
        }
        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environment'])) {
            $model->environment = $map['environment'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['templateVariables'])) {
            $model->templateVariables = $map['templateVariables'];
        }
        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }

        return $model;
    }
}
