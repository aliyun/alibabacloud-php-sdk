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
     * @var string
     */
    public $aspectRatio;

    /**
     * @var croppingBoundary
     */
    public $croppingBoundary;
    protected $_name = [
        'score'            => 'Score',
        'aspectRatio'      => 'AspectRatio',
        'croppingBoundary' => 'CroppingBoundary',
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
        if (null !== $this->aspectRatio) {
            $res['AspectRatio'] = $this->aspectRatio;
        }
        if (null !== $this->croppingBoundary) {
            $res['CroppingBoundary'] = null !== $this->croppingBoundary ? $this->croppingBoundary->toMap() : null;
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
        if (isset($map['AspectRatio'])) {
            $model->aspectRatio = $map['AspectRatio'];
        }
        if (isset($map['CroppingBoundary'])) {
            $model->croppingBoundary = croppingBoundary::fromMap($map['CroppingBoundary']);
        }

        return $model;
    }
}
