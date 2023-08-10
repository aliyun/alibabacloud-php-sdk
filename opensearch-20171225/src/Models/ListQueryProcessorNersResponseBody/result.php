<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The name of the entity type.
     *
     * @var string
     */
    public $label;

    /**
     * @description The priority of an entity type among entity types that have the same priority level.
     *
     * A smaller value indicates a higher priority. Default value: 0.
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description The priority level of the entity type.
     *
     *   HIGH
     *   MIDDLE
     *   LOW
     *
     * @example HIGH
     *
     * @var string
     */
    public $priority;

    /**
     * @description The internal name of the entity type.
     *
     * @example brand
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'label'    => 'label',
        'order'    => 'order',
        'priority' => 'priority',
        'tag'      => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
