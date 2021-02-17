<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsResponseBody\croppingSuggestions\croppingBoundary;
use AlibabaCloud\Tea\Model;

class croppingSuggestions extends Model
{
    /**
     * @var float
     */
    public $score;

    /**
     * @var croppingBoundary
     */
    public $croppingBoundary;

    /**
     * @var string
     */
    public $aspectRatio;
    protected $_name = [
        'score'            => 'Score',
        'croppingBoundary' => 'CroppingBoundary',
        'aspectRatio'      => 'AspectRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->croppingBoundary) {
            $res['CroppingBoundary'] = null !== $this->croppingBoundary ? $this->croppingBoundary->toMap() : null;
        }
        if (null !== $this->aspectRatio) {
            $res['AspectRatio'] = $this->aspectRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return croppingSuggestions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['CroppingBoundary'])) {
            $model->croppingBoundary = croppingBoundary::fromMap($map['CroppingBoundary']);
        }
        if (isset($map['AspectRatio'])) {
            $model->aspectRatio = $map['AspectRatio'];
        }

        return $model;
    }
}
