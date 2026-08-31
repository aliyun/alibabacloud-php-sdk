<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLlmModelProvidersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLlmModelProvidersResponseBody\data\llmModels;

class data extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $id;

    /**
     * @var llmModels[]
     */
    public $llmModels;

    /**
     * @var string
     */
    public $providerSource;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $serviceProvider;
    protected $_name = [
        'baseUrl' => 'BaseUrl',
        'enabled' => 'Enabled',
        'id' => 'Id',
        'llmModels' => 'LlmModels',
        'providerSource' => 'ProviderSource',
        'providerType' => 'ProviderType',
        'serviceProvider' => 'ServiceProvider',
    ];

    public function validate()
    {
        if (\is_array($this->llmModels)) {
            Model::validateArray($this->llmModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->llmModels) {
            if (\is_array($this->llmModels)) {
                $res['LlmModels'] = [];
                $n1 = 0;
                foreach ($this->llmModels as $item1) {
                    $res['LlmModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->providerSource) {
            $res['ProviderSource'] = $this->providerSource;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }

        if (null !== $this->serviceProvider) {
            $res['ServiceProvider'] = $this->serviceProvider;
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
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LlmModels'])) {
            if (!empty($map['LlmModels'])) {
                $model->llmModels = [];
                $n1 = 0;
                foreach ($map['LlmModels'] as $item1) {
                    $model->llmModels[$n1] = llmModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProviderSource'])) {
            $model->providerSource = $map['ProviderSource'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        if (isset($map['ServiceProvider'])) {
            $model->serviceProvider = $map['ServiceProvider'];
        }

        return $model;
    }
}
