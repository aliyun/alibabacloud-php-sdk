<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsResponseBody\croppingSuggestions\croppingBoundary;
use AlibabaCloud\Tea\Model;

class croppingSuggestions extends Model
{
    /**
     * @var string
     */
    public $aspectRatio;

    /**
     * @var croppingBoundary
     */
    public $croppingBoundary;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'aspectRatio'      => 'AspectRatio',
        'croppingBoundary' => 'CroppingBoundary',
        'score'            => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aspectRatio) {
            $res['AspectRatio'] = $this->aspectRatio;
        }
        if (null !== $this->croppingBoundary) {
            $res['CroppingBoundary'] = null !== $this->croppingBoundary ? $this->croppingBoundary->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['AspectRatio'])) {
            $model->aspectRatio = $map['AspectRatio'];
        }
        if (isset($map['CroppingBoundary'])) {
            $model->croppingBoundary = croppingBoundary::fromMap($map['CroppingBoundary']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
