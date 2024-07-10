<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateWebApplicationTrafficConfigInput extends Model
{
    /**
     * @example Anonymous
     *
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $disableURLInternet;

    /**
     * @var float[]
     */
    public $revisionsTrafficWeight;

    /**
     * @var WebAclConfig
     */
    public $webAclConfig;
    protected $_name = [
        'authType'               => 'AuthType',
        'disableURLInternet'     => 'DisableURLInternet',
        'revisionsTrafficWeight' => 'RevisionsTrafficWeight',
        'webAclConfig'           => 'WebAclConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->disableURLInternet) {
            $res['DisableURLInternet'] = $this->disableURLInternet;
        }
        if (null !== $this->revisionsTrafficWeight) {
            $res['RevisionsTrafficWeight'] = $this->revisionsTrafficWeight;
        }
        if (null !== $this->webAclConfig) {
            $res['WebAclConfig'] = null !== $this->webAclConfig ? $this->webAclConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWebApplicationTrafficConfigInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['DisableURLInternet'])) {
            $model->disableURLInternet = $map['DisableURLInternet'];
        }
        if (isset($map['RevisionsTrafficWeight'])) {
            $model->revisionsTrafficWeight = $map['RevisionsTrafficWeight'];
        }
        if (isset($map['WebAclConfig'])) {
            $model->webAclConfig = WebAclConfig::fromMap($map['WebAclConfig']);
        }

        return $model;
    }
}
