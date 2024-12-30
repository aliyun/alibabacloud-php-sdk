<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryLlmCubeWithThemeListByUserIdResponseBody;

use AlibabaCloud\Tea\Model;

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
        'cubeIds'  => 'CubeIds',
        'themeIds' => 'ThemeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeIds) {
            $res['CubeIds'] = $this->cubeIds;
        }
        if (null !== $this->themeIds) {
            $res['ThemeIds'] = $this->themeIds;
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
        if (isset($map['CubeIds'])) {
            $model->cubeIds = $map['CubeIds'];
        }
        if (isset($map['ThemeIds'])) {
            $model->themeIds = $map['ThemeIds'];
        }

        return $model;
    }
}
