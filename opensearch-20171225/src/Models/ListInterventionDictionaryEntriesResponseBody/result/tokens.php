<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody\result;

use AlibabaCloud\Tea\Model;

class tokens extends Model
{
    /**
     * @var string
     */
    public $tagLabel;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $order;
    protected $_name = [
        'tagLabel' => 'tagLabel',
        'tag'      => 'tag',
        'token'    => 'token',
        'order'    => 'order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagLabel) {
            $res['tagLabel'] = $this->tagLabel;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tokens
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagLabel'])) {
            $model->tagLabel = $map['tagLabel'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        return $model;
    }
}
