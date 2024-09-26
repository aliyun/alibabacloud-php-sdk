<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunCommentGenerationRequest extends Model
{
    /**
     * @example 20
     *
     * @var string
     */
    public $length;

    /**
     * @example 10
     *
     * @var string
     */
    public $numComments;

    /**
     * @var string
     */
    public $sourceMaterial;

    /**
     * @var string
     */
    public $style;
    protected $_name = [
        'length'         => 'length',
        'numComments'    => 'numComments',
        'sourceMaterial' => 'sourceMaterial',
        'style'          => 'style',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['length'] = $this->length;
        }
        if (null !== $this->numComments) {
            $res['numComments'] = $this->numComments;
        }
        if (null !== $this->sourceMaterial) {
            $res['sourceMaterial'] = $this->sourceMaterial;
        }
        if (null !== $this->style) {
            $res['style'] = $this->style;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommentGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['length'])) {
            $model->length = $map['length'];
        }
        if (isset($map['numComments'])) {
            $model->numComments = $map['numComments'];
        }
        if (isset($map['sourceMaterial'])) {
            $model->sourceMaterial = $map['sourceMaterial'];
        }
        if (isset($map['style'])) {
            $model->style = $map['style'];
        }

        return $model;
    }
}
