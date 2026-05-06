<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelProviderTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
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
    public $providerName;

    /**
     * @var string
     */
    public $providerTemplateId;

    /**
     * @var string
     */
    public $providerType;
    protected $_name = [
        'config' => 'Config',
        'description' => 'Description',
        'enableWuyingProxy' => 'EnableWuyingProxy',
        'name' => 'Name',
        'providerName' => 'ProviderName',
        'providerTemplateId' => 'ProviderTemplateId',
        'providerType' => 'ProviderType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
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
            $model->config = $map['Config'];
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

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        return $model;
    }
}
