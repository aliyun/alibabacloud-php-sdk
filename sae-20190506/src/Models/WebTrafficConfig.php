<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebTrafficConfig extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $disableInternetURL;

    /**
     * @var float[]
     */
    public $revisionsTrafficWeight;

    /**
     * @var WebAclConfig
     */
    public $webAclConfig;
    protected $_name = [
        'authType' => 'AuthType',
        'disableInternetURL' => 'DisableInternetURL',
        'revisionsTrafficWeight' => 'RevisionsTrafficWeight',
        'webAclConfig' => 'WebAclConfig',
    ];

    public function validate()
    {
        if (\is_array($this->revisionsTrafficWeight)) {
            Model::validateArray($this->revisionsTrafficWeight);
        }
        if (null !== $this->webAclConfig) {
            $this->webAclConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->disableInternetURL) {
            $res['DisableInternetURL'] = $this->disableInternetURL;
        }

        if (null !== $this->revisionsTrafficWeight) {
            if (\is_array($this->revisionsTrafficWeight)) {
                $res['RevisionsTrafficWeight'] = [];
                foreach ($this->revisionsTrafficWeight as $key1 => $value1) {
                    $res['RevisionsTrafficWeight'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->webAclConfig) {
            $res['WebAclConfig'] = null !== $this->webAclConfig ? $this->webAclConfig->toArray($noStream) : $this->webAclConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['DisableInternetURL'])) {
            $model->disableInternetURL = $map['DisableInternetURL'];
        }

        if (isset($map['RevisionsTrafficWeight'])) {
            if (!empty($map['RevisionsTrafficWeight'])) {
                $model->revisionsTrafficWeight = [];
                foreach ($map['RevisionsTrafficWeight'] as $key1 => $value1) {
                    $model->revisionsTrafficWeight[$key1] = $value1;
                }
            }
        }

        if (isset($map['WebAclConfig'])) {
            $model->webAclConfig = WebAclConfig::fromMap($map['WebAclConfig']);
        }

        return $model;
    }
}
