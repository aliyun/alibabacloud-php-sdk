<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result\apiCopilotLlmCubeModels;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result\apiCopilotThemeModels;

class result extends Model
{
    /**
     * @var apiCopilotLlmCubeModels[]
     */
    public $apiCopilotLlmCubeModels;

    /**
     * @var apiCopilotThemeModels[]
     */
    public $apiCopilotThemeModels;
    protected $_name = [
        'apiCopilotLlmCubeModels' => 'ApiCopilotLlmCubeModels',
        'apiCopilotThemeModels' => 'ApiCopilotThemeModels',
    ];

    public function validate()
    {
        if (\is_array($this->apiCopilotLlmCubeModels)) {
            Model::validateArray($this->apiCopilotLlmCubeModels);
        }
        if (\is_array($this->apiCopilotThemeModels)) {
            Model::validateArray($this->apiCopilotThemeModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiCopilotLlmCubeModels) {
            if (\is_array($this->apiCopilotLlmCubeModels)) {
                $res['ApiCopilotLlmCubeModels'] = [];
                $n1 = 0;
                foreach ($this->apiCopilotLlmCubeModels as $item1) {
                    $res['ApiCopilotLlmCubeModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->apiCopilotThemeModels) {
            if (\is_array($this->apiCopilotThemeModels)) {
                $res['ApiCopilotThemeModels'] = [];
                $n1 = 0;
                foreach ($this->apiCopilotThemeModels as $item1) {
                    $res['ApiCopilotThemeModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiCopilotLlmCubeModels'])) {
            if (!empty($map['ApiCopilotLlmCubeModels'])) {
                $model->apiCopilotLlmCubeModels = [];
                $n1 = 0;
                foreach ($map['ApiCopilotLlmCubeModels'] as $item1) {
                    $model->apiCopilotLlmCubeModels[$n1++] = apiCopilotLlmCubeModels::fromMap($item1);
                }
            }
        }

        if (isset($map['ApiCopilotThemeModels'])) {
            if (!empty($map['ApiCopilotThemeModels'])) {
                $model->apiCopilotThemeModels = [];
                $n1 = 0;
                foreach ($map['ApiCopilotThemeModels'] as $item1) {
                    $model->apiCopilotThemeModels[$n1++] = apiCopilotThemeModels::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
