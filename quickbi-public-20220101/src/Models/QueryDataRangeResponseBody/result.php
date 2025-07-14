<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result\apiCopilotLlmCubeModels;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result\apiCopilotThemeModels;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Array of LlmCube resources.
     *
     * @var apiCopilotLlmCubeModels[]
     */
    public $apiCopilotLlmCubeModels;

    /**
     * @description Array of analysis themes.
     *
     * @var apiCopilotThemeModels[]
     */
    public $apiCopilotThemeModels;
    protected $_name = [
        'apiCopilotLlmCubeModels' => 'ApiCopilotLlmCubeModels',
        'apiCopilotThemeModels' => 'ApiCopilotThemeModels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCopilotLlmCubeModels) {
            $res['ApiCopilotLlmCubeModels'] = [];
            if (null !== $this->apiCopilotLlmCubeModels && \is_array($this->apiCopilotLlmCubeModels)) {
                $n = 0;
                foreach ($this->apiCopilotLlmCubeModels as $item) {
                    $res['ApiCopilotLlmCubeModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->apiCopilotThemeModels) {
            $res['ApiCopilotThemeModels'] = [];
            if (null !== $this->apiCopilotThemeModels && \is_array($this->apiCopilotThemeModels)) {
                $n = 0;
                foreach ($this->apiCopilotThemeModels as $item) {
                    $res['ApiCopilotThemeModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiCopilotLlmCubeModels'])) {
            if (!empty($map['ApiCopilotLlmCubeModels'])) {
                $model->apiCopilotLlmCubeModels = [];
                $n = 0;
                foreach ($map['ApiCopilotLlmCubeModels'] as $item) {
                    $model->apiCopilotLlmCubeModels[$n++] = null !== $item ? apiCopilotLlmCubeModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApiCopilotThemeModels'])) {
            if (!empty($map['ApiCopilotThemeModels'])) {
                $model->apiCopilotThemeModels = [];
                $n = 0;
                foreach ($map['ApiCopilotThemeModels'] as $item) {
                    $model->apiCopilotThemeModels[$n++] = null !== $item ? apiCopilotThemeModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
