<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result\apiCopilotThemeModels\apiCopilotLlmCubeModels;
use AlibabaCloud\Tea\Model;

class apiCopilotThemeModels extends Model
{
    /**
     * @var apiCopilotLlmCubeModels[]
     */
    public $apiCopilotLlmCubeModels;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @example 36631232342312312
     *
     * @var string
     */
    public $themeId;

    /**
     * @var string
     */
    public $themeName;
    protected $_name = [
        'apiCopilotLlmCubeModels' => 'ApiCopilotLlmCubeModels',
        'createUser' => 'CreateUser',
        'themeId' => 'ThemeId',
        'themeName' => 'ThemeName',
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
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }
        if (null !== $this->themeName) {
            $res['ThemeName'] = $this->themeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiCopilotThemeModels
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
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }
        if (isset($map['ThemeName'])) {
            $model->themeName = $map['ThemeName'];
        }

        return $model;
    }
}
