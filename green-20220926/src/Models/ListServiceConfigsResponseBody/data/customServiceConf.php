<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data;

use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf\rules;
use AlibabaCloud\Tea\Model;

class customServiceConf extends Model
{
    /**
     * @example audio_media_detection
     *
     * @var string
     */
    public $audioService;

    /**
     * @var string[]
     */
    public $imageService;

    /**
     * @var string[]
     */
    public $keywordFilterLibs;

    /**
     * @var string[]
     */
    public $keywordHitLibs;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var string[]
     */
    public $similarTextHitLibs;
    protected $_name = [
        'audioService'       => 'AudioService',
        'imageService'       => 'ImageService',
        'keywordFilterLibs'  => 'KeywordFilterLibs',
        'keywordHitLibs'     => 'KeywordHitLibs',
        'rules'              => 'Rules',
        'similarTextHitLibs' => 'SimilarTextHitLibs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioService) {
            $res['AudioService'] = $this->audioService;
        }
        if (null !== $this->imageService) {
            $res['ImageService'] = $this->imageService;
        }
        if (null !== $this->keywordFilterLibs) {
            $res['KeywordFilterLibs'] = $this->keywordFilterLibs;
        }
        if (null !== $this->keywordHitLibs) {
            $res['KeywordHitLibs'] = $this->keywordHitLibs;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->similarTextHitLibs) {
            $res['SimilarTextHitLibs'] = $this->similarTextHitLibs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customServiceConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioService'])) {
            $model->audioService = $map['AudioService'];
        }
        if (isset($map['ImageService'])) {
            if (!empty($map['ImageService'])) {
                $model->imageService = $map['ImageService'];
            }
        }
        if (isset($map['KeywordFilterLibs'])) {
            if (!empty($map['KeywordFilterLibs'])) {
                $model->keywordFilterLibs = $map['KeywordFilterLibs'];
            }
        }
        if (isset($map['KeywordHitLibs'])) {
            if (!empty($map['KeywordHitLibs'])) {
                $model->keywordHitLibs = $map['KeywordHitLibs'];
            }
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SimilarTextHitLibs'])) {
            if (!empty($map['SimilarTextHitLibs'])) {
                $model->similarTextHitLibs = $map['SimilarTextHitLibs'];
            }
        }

        return $model;
    }
}
