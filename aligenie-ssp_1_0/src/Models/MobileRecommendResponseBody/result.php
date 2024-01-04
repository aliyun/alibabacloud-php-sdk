<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\MobileRecommendResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $authors;

    /**
     * @example http://img4.kuwo.cn/star/albumcover/120/78/77/1688821132.jpg
     *
     * @var string
     */
    public $cover;

    /**
     * @example 550144364
     *
     * @var string
     */
    public $rawId;

    /**
     * @example KG
     *
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'authors' => 'Authors',
        'cover'   => 'Cover',
        'rawId'   => 'RawId',
        'source'  => 'Source',
        'title'   => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authors) {
            $res['Authors'] = $this->authors;
        }
        if (null !== $this->cover) {
            $res['Cover'] = $this->cover;
        }
        if (null !== $this->rawId) {
            $res['RawId'] = $this->rawId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Authors'])) {
            if (!empty($map['Authors'])) {
                $model->authors = $map['Authors'];
            }
        }
        if (isset($map['Cover'])) {
            $model->cover = $map['Cover'];
        }
        if (isset($map['RawId'])) {
            $model->rawId = $map['RawId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
