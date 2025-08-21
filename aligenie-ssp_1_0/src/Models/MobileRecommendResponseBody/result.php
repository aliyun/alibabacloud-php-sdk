<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\MobileRecommendResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $authors;

    /**
     * @var string
     */
    public $cover;

    /**
     * @var string
     */
    public $rawId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'authors' => 'Authors',
        'cover' => 'Cover',
        'rawId' => 'RawId',
        'source' => 'Source',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->authors)) {
            Model::validateArray($this->authors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authors) {
            if (\is_array($this->authors)) {
                $res['Authors'] = [];
                $n1 = 0;
                foreach ($this->authors as $item1) {
                    $res['Authors'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authors'])) {
            if (!empty($map['Authors'])) {
                $model->authors = [];
                $n1 = 0;
                foreach ($map['Authors'] as $item1) {
                    $model->authors[$n1] = $item1;
                    ++$n1;
                }
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
