<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        'keywordFilterLibs' => 'KeywordFilterLibs',
        'keywordHitLibs' => 'KeywordHitLibs',
        'similarTextHitLibs' => 'SimilarTextHitLibs',
    ];

    public function validate()
    {
        if (\is_array($this->keywordFilterLibs)) {
            Model::validateArray($this->keywordFilterLibs);
        }
        if (\is_array($this->keywordHitLibs)) {
            Model::validateArray($this->keywordHitLibs);
        }
        if (\is_array($this->similarTextHitLibs)) {
            Model::validateArray($this->similarTextHitLibs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywordFilterLibs) {
            if (\is_array($this->keywordFilterLibs)) {
                $res['KeywordFilterLibs'] = [];
                $n1 = 0;
                foreach ($this->keywordFilterLibs as $item1) {
                    $res['KeywordFilterLibs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keywordHitLibs) {
            if (\is_array($this->keywordHitLibs)) {
                $res['KeywordHitLibs'] = [];
                $n1 = 0;
                foreach ($this->keywordHitLibs as $item1) {
                    $res['KeywordHitLibs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->similarTextHitLibs) {
            if (\is_array($this->similarTextHitLibs)) {
                $res['SimilarTextHitLibs'] = [];
                $n1 = 0;
                foreach ($this->similarTextHitLibs as $item1) {
                    $res['SimilarTextHitLibs'][$n1++] = $item1;
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
        if (isset($map['KeywordFilterLibs'])) {
            if (!empty($map['KeywordFilterLibs'])) {
                $model->keywordFilterLibs = [];
                $n1 = 0;
                foreach ($map['KeywordFilterLibs'] as $item1) {
                    $model->keywordFilterLibs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeywordHitLibs'])) {
            if (!empty($map['KeywordHitLibs'])) {
                $model->keywordHitLibs = [];
                $n1 = 0;
                foreach ($map['KeywordHitLibs'] as $item1) {
                    $model->keywordHitLibs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SimilarTextHitLibs'])) {
            if (!empty($map['SimilarTextHitLibs'])) {
                $model->similarTextHitLibs = [];
                $n1 = 0;
                foreach ($map['SimilarTextHitLibs'] as $item1) {
                    $model->similarTextHitLibs[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
