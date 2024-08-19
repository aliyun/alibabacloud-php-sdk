<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class customServiceConf extends Model
{
    /**
     * @var string[]
     */
    public $keywordFilterLibs;

    /**
     * @var string[]
     */
    public $keywordHitLibs;

    /**
     * @var string[]
     */
    public $similarTextHitLibs;
    protected $_name = [
        'keywordFilterLibs'  => 'KeywordFilterLibs',
        'keywordHitLibs'     => 'KeywordHitLibs',
        'similarTextHitLibs' => 'SimilarTextHitLibs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywordFilterLibs) {
            $res['KeywordFilterLibs'] = $this->keywordFilterLibs;
        }
        if (null !== $this->keywordHitLibs) {
            $res['KeywordHitLibs'] = $this->keywordHitLibs;
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
        if (isset($map['SimilarTextHitLibs'])) {
            if (!empty($map['SimilarTextHitLibs'])) {
                $model->similarTextHitLibs = $map['SimilarTextHitLibs'];
            }
        }

        return $model;
    }
}
