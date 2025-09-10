<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListIntegrationPolicyPodMonitorsRequest extends Model
{
    /**
     * @var string
     */
    public $addonReleaseName;

    /**
     * @var bool
     */
    public $encryptYaml;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'addonReleaseName' => 'addonReleaseName',
        'encryptYaml' => 'encryptYaml',
        'namespace' => 'namespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonReleaseName) {
            $res['addonReleaseName'] = $this->addonReleaseName;
        }

        if (null !== $this->encryptYaml) {
            $res['encryptYaml'] = $this->encryptYaml;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
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
        if (isset($map['addonReleaseName'])) {
            $model->addonReleaseName = $map['addonReleaseName'];
        }

        if (isset($map['encryptYaml'])) {
            $model->encryptYaml = $map['encryptYaml'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        return $model;
    }
}
