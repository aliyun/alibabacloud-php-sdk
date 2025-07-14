<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigResponseBody\result;

use AlibabaCloud\Tea\Model;

class dataRange extends Model
{
    /**
     * @description Whether all question resources are selected.
     *
     * @example true/false
     *
     * @var bool
     */
    public $allCube;

    /**
     * @description Whether all analysis themes are selected.
     *
     * @example true/false
     *
     * @var bool
     */
    public $allTheme;

    /**
     * @description Collection of question resource IDs.
     *
     * @var string[]
     */
    public $llmCubes;

    /**
     * @description Collection of analysis theme IDs.
     *
     * @var string[]
     */
    public $themes;
    protected $_name = [
        'allCube' => 'AllCube',
        'allTheme' => 'AllTheme',
        'llmCubes' => 'LlmCubes',
        'themes' => 'Themes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allCube) {
            $res['AllCube'] = $this->allCube;
        }
        if (null !== $this->allTheme) {
            $res['AllTheme'] = $this->allTheme;
        }
        if (null !== $this->llmCubes) {
            $res['LlmCubes'] = $this->llmCubes;
        }
        if (null !== $this->themes) {
            $res['Themes'] = $this->themes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllCube'])) {
            $model->allCube = $map['AllCube'];
        }
        if (isset($map['AllTheme'])) {
            $model->allTheme = $map['AllTheme'];
        }
        if (isset($map['LlmCubes'])) {
            if (!empty($map['LlmCubes'])) {
                $model->llmCubes = $map['LlmCubes'];
            }
        }
        if (isset($map['Themes'])) {
            if (!empty($map['Themes'])) {
                $model->themes = $map['Themes'];
            }
        }

        return $model;
    }
}
