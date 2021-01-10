<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $priority;
    protected $_name = [
        'label'    => 'label',
        'tag'      => 'tag',
        'order'    => 'order',
        'priority' => 'priority',
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
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
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
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        return $model;
    }
}
