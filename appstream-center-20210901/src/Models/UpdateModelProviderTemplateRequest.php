<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateRequest\config;

class UpdateModelProviderTemplateRequest extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableWuyingProxy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $providerTemplateId;
    protected $_name = [
        'config' => 'Config',
        'description' => 'Description',
        'enableWuyingProxy' => 'EnableWuyingProxy',
        'name' => 'Name',
        'providerTemplateId' => 'ProviderTemplateId',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableWuyingProxy) {
            $res['EnableWuyingProxy'] = $this->enableWuyingProxy;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
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
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableWuyingProxy'])) {
            $model->enableWuyingProxy = $map['EnableWuyingProxy'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        return $model;
    }
}
