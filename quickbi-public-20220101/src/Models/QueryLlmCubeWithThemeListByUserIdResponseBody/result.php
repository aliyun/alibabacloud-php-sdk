<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryLlmCubeWithThemeListByUserIdResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $cubeIds;

    /**
     * @var string[]
     */
    public $themeIds;
    protected $_name = [
        'cubeIds' => 'CubeIds',
        'themeIds' => 'ThemeIds',
    ];

    public function validate()
    {
        if (\is_array($this->cubeIds)) {
            Model::validateArray($this->cubeIds);
        }
        if (\is_array($this->themeIds)) {
            Model::validateArray($this->themeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeIds) {
            if (\is_array($this->cubeIds)) {
                $res['CubeIds'] = [];
                foreach ($this->cubeIds as $key1 => $value1) {
                    $res['CubeIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->themeIds) {
            if (\is_array($this->themeIds)) {
                $res['ThemeIds'] = [];
                foreach ($this->themeIds as $key1 => $value1) {
                    $res['ThemeIds'][$key1] = $value1;
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
        if (isset($map['CubeIds'])) {
            if (!empty($map['CubeIds'])) {
                $model->cubeIds = [];
                foreach ($map['CubeIds'] as $key1 => $value1) {
                    $model->cubeIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['ThemeIds'])) {
            if (!empty($map['ThemeIds'])) {
                $model->themeIds = [];
                foreach ($map['ThemeIds'] as $key1 => $value1) {
                    $model->themeIds[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
