<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class CreateLinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example BB5953C300957
     *
     * @var string
     */
    public $appId;

    /**
     * @example false
     *
     * @var string
     */
    public $cors;

    /**
     * @example x519.cn
     *
     * @var string
     */
    public $domain;

    /**
     * @example txt
     *
     * @var string
     */
    public $dynamicfield;

    /**
     * @description This parameter is required.
     *
     * @example https://********
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'        => 'AppId',
        'cors'         => 'Cors',
        'domain'       => 'Domain',
        'dynamicfield' => 'Dynamicfield',
        'targetUrl'    => 'TargetUrl',
        'workspaceId'  => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cors) {
            $res['Cors'] = $this->cors;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->dynamicfield) {
            $res['Dynamicfield'] = $this->dynamicfield;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Cors'])) {
            $model->cors = $map['Cors'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Dynamicfield'])) {
            $model->dynamicfield = $map['Dynamicfield'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
