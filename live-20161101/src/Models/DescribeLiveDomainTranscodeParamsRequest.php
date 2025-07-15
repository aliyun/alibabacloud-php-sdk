<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainTranscodeParamsRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $app;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $pushdomain;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'app' => 'app',
        'pushdomain' => 'pushdomain',
        'templateName' => 'template_name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->app) {
            $res['app'] = $this->app;
        }
        if (null !== $this->pushdomain) {
            $res['pushdomain'] = $this->pushdomain;
        }
        if (null !== $this->templateName) {
            $res['template_name'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainTranscodeParamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['app'])) {
            $model->app = $map['app'];
        }
        if (isset($map['pushdomain'])) {
            $model->pushdomain = $map['pushdomain'];
        }
        if (isset($map['template_name'])) {
            $model->templateName = $map['template_name'];
        }

        return $model;
    }
}
