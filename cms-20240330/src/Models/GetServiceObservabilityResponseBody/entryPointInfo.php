<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponseBody;

use AlibabaCloud\Tea\Model;

class entryPointInfo extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $privateDomain;

    /**
     * @description SLS Project
     *
     * @example proj-xtrace-xxxxx
     *
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $publicDomain;
    protected $_name = [
        'authToken' => 'authToken',
        'privateDomain' => 'privateDomain',
        'project' => 'project',
        'publicDomain' => 'publicDomain',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }
        if (null !== $this->privateDomain) {
            $res['privateDomain'] = $this->privateDomain;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->publicDomain) {
            $res['publicDomain'] = $this->publicDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entryPointInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }
        if (isset($map['privateDomain'])) {
            $model->privateDomain = $map['privateDomain'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['publicDomain'])) {
            $model->publicDomain = $map['publicDomain'];
        }

        return $model;
    }
}
