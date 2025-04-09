<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody\result;

use AlibabaCloud\Dara\Model;

class searchResult extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $link;

    /**
     * @var int
     */
    public $position;

    /**
     * @var string
     */
    public $snippet;

    /**
     * @var string
     */
    public $tilte;
    protected $_name = [
        'content' => 'content',
        'link' => 'link',
        'position' => 'position',
        'snippet' => 'snippet',
        'tilte' => 'tilte',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->link) {
            $res['link'] = $this->link;
        }

        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
        }

        if (null !== $this->tilte) {
            $res['tilte'] = $this->tilte;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['link'])) {
            $model->link = $map['link'];
        }

        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
        }

        if (isset($map['tilte'])) {
            $model->tilte = $map['tilte'];
        }

        return $model;
    }
}
