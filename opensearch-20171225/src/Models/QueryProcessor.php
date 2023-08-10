<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class QueryProcessor extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $indexes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[][]
     */
    public $processors;
    protected $_name = [
        'active'     => 'active',
        'category'   => 'category',
        'domain'     => 'domain',
        'indexes'    => 'indexes',
        'name'       => 'name',
        'processors' => 'processors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->indexes) {
            $res['indexes'] = $this->indexes;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->processors) {
            $res['processors'] = $this->processors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProcessor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['indexes'])) {
            if (!empty($map['indexes'])) {
                $model->indexes = $map['indexes'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = $map['processors'];
            }
        }

        return $model;
    }
}
