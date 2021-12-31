<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var int
     */
    public $created;

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

    /**
     * @var int
     */
    public $updated;
    protected $_name = [
        'active'     => 'active',
        'created'    => 'created',
        'domain'     => 'domain',
        'indexes'    => 'indexes',
        'name'       => 'name',
        'processors' => 'processors',
        'updated'    => 'updated',
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
        if (null !== $this->created) {
            $res['created'] = $this->created;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
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
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
