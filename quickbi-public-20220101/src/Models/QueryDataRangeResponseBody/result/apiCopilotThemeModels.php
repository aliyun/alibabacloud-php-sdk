<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result\apiCopilotThemeModels\apiCopilotLlmCubeModels;

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

    public function validate()
    {
        if (\is_array($this->apiCopilotLlmCubeModels)) {
            Model::validateArray($this->apiCopilotLlmCubeModels);
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
