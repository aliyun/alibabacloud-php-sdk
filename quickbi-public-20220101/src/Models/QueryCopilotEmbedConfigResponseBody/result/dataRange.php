<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigResponseBody\result;

use AlibabaCloud\Dara\Model;

class dataRange extends Model
{
    /**
     * @var bool
     */
    public $allCube;

    /**
     * @var bool
     */
    public $allTheme;

    /**
     * @var string[]
     */
    public $llmCubes;

    /**
     * @var string[]
     */
    public $themes;
    protected $_name = [
        'allCube' => 'AllCube',
        'allTheme' => 'AllTheme',
        'llmCubes' => 'LlmCubes',
        'themes' => 'Themes',
    ];

    public function validate()
    {
        if (\is_array($this->llmCubes)) {
            Model::validateArray($this->llmCubes);
        }
        if (\is_array($this->themes)) {
            Model::validateArray($this->themes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allCube) {
            $res['AllCube'] = $this->allCube;
        }

        if (null !== $this->allTheme) {
            $res['AllTheme'] = $this->allTheme;
        }

        if (null !== $this->llmCubes) {
            if (\is_array($this->llmCubes)) {
                $res['LlmCubes'] = [];
                $n1 = 0;
                foreach ($this->llmCubes as $item1) {
                    $res['LlmCubes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->themes) {
            if (\is_array($this->themes)) {
                $res['Themes'] = [];
                $n1 = 0;
                foreach ($this->themes as $item1) {
                    $res['Themes'][$n1++] = $item1;
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
        if (isset($map['AllCube'])) {
            $model->allCube = $map['AllCube'];
        }

        if (isset($map['AllTheme'])) {
            $model->allTheme = $map['AllTheme'];
        }

        if (isset($map['LlmCubes'])) {
            if (!empty($map['LlmCubes'])) {
                $model->llmCubes = [];
                $n1 = 0;
                foreach ($map['LlmCubes'] as $item1) {
                    $model->llmCubes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Themes'])) {
            if (!empty($map['Themes'])) {
                $model->themes = [];
                $n1 = 0;
                foreach ($map['Themes'] as $item1) {
                    $model->themes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
