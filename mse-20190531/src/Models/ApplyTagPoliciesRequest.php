<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class ApplyTagPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $region;
    /**
     * @var RulesValue[]
     */
    public $rules;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'enable'         => 'Enable',
        'namespace'      => 'Namespace',
        'namespaceId'    => 'NamespaceId',
        'region'         => 'Region',
        'rules'          => 'Rules',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                foreach ($this->rules as $key1 => $value1) {
                    $res['Rules'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                foreach ($map['Rules'] as $key1 => $value1) {
                    $model->rules[$key1] = RulesValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
