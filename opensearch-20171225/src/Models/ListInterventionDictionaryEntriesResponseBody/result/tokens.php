<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody\result;

use AlibabaCloud\Tea\Model;

class tokens extends Model
{
    /**
     * @description The sequence number.
     *
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description The internal name of the identified entity type. Valid values:
     *
     *   brand
     *   category
     *   material
     *   element
     *   style
     *   color
     *   function
     *   scenario
     *   people
     *   season
     *   model
     *   region
     *   name
     *   adjective
     *   category-modifier
     *   size
     *   quality
     *   suit
     *   new-release
     *   series
     *   marketing
     *   entertainment
     *   organization
     *   movie
     *   game
     *   number
     *   unit
     *   common
     *   new-word
     *   proper-noun
     *   symbol
     *   prefix
     *   suffix
     *   gift
     *   negative
     *   agent
     *
     * @example category
     *
     * @var string
     */
    public $tag;

    /**
     * @description The description of the internal name of the identified entity type.
     *
     * @var string
     */
    public $tagLabel;

    /**
     * @description The entity.
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'order'    => 'order',
        'tag'      => 'tag',
        'tagLabel' => 'tagLabel',
        'token'    => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->tagLabel) {
            $res['tagLabel'] = $this->tagLabel;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['tagLabel'])) {
            $model->tagLabel = $map['tagLabel'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
