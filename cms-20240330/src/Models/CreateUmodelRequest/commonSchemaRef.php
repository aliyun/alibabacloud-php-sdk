<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest;

use AlibabaCloud\Tea\Model;

class commonSchemaRef extends Model
{
    /**
     * @example test-job-123
     *
     * @var string
     */
    public $group;

    /**
     * @var string[]
     */
    public $items;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'group' => 'group',
        'items' => 'items',
        'version' => 'version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->items) {
            $res['items'] = $this->items;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonSchemaRef
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = $map['items'];
            }
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
