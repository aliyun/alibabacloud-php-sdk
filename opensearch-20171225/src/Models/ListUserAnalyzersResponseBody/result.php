<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponseBody\result\dicts;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the application is available.
     *
     * @example false
     *
     * @var bool
     */
    public $available;

    /**
     * @description The basic analyzer. Valid values:
     *
     *   chn_standard: [a common analyzer in Chinese](~~179424~~)
     *   chn_scene_name: an analyzer for person names in Chinese
     *   chn_ecommerce: [an analyzer for E-commerce in Chinese](~~179424~~)
     *   chn_it_content: [an analyzer for IT content in Chinese](~~179424~~)
     *   en_min: a small-granularity analyzer in English
     *   th_standard: a common analyzer in Thai
     *   th_ecommerce: an analyzer for E-commerce in Thai
     *   vn_standard: a common analyzer in Vietnamese
     *   chn_community_it: an analyzer for IT community content in Chinese
     *   chn_ecommerce_general: a common analyzer for the E-commerce industry in Chinese
     *   chn_esports_general: a common analyzer for the gaming industry in Chinese
     *   chn_edu_question: an analyzer for question search of the education industry in Chinese
     *
     * @example chn_standard
     *
     * @var string
     */
    public $business;

    /**
     * @description The timestamp when the application was created.
     *
     * @example 1588054131
     *
     * @var int
     */
    public $created;

    /**
     * @description The dictionaries that are used by the custom analyzer.
     *
     * For more information, see [UserDict](~~178933~~).
     * @var dicts[]
     */
    public $dicts;

    /**
     * @description The ID of the custom analyzer.
     *
     * @example 1234
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the custom analyzer.
     *
     * @example kevin_test2
     *
     * @var string
     */
    public $name;

    /**
     * @description The timestamp when the application was last updated.
     *
     * @example 1588054131
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'available' => 'available',
        'business'  => 'business',
        'created'   => 'created',
        'dicts'     => 'dicts',
        'id'        => 'id',
        'name'      => 'name',
        'updated'   => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['available'] = $this->available;
        }
        if (null !== $this->business) {
            $res['business'] = $this->business;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->dicts) {
            $res['dicts'] = [];
            if (null !== $this->dicts && \is_array($this->dicts)) {
                $n = 0;
                foreach ($this->dicts as $item) {
                    $res['dicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['available'])) {
            $model->available = $map['available'];
        }
        if (isset($map['business'])) {
            $model->business = $map['business'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['dicts'])) {
            if (!empty($map['dicts'])) {
                $model->dicts = [];
                $n            = 0;
                foreach ($map['dicts'] as $item) {
                    $model->dicts[$n++] = null !== $item ? dicts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
