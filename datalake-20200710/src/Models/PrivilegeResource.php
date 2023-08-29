<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class PrivilegeResource extends Model
{
    /**
     * @var string
     */
    public $access;

    /**
     * @var MetaResource
     */
    public $metaResource;
    protected $_name = [
        'access'       => 'Access',
        'metaResource' => 'MetaResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->access) {
            $res['Access'] = $this->access;
        }
        if (null !== $this->metaResource) {
            $res['MetaResource'] = null !== $this->metaResource ? $this->metaResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrivilegeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Access'])) {
            $model->access = $map['Access'];
        }
        if (isset($map['MetaResource'])) {
            $model->metaResource = MetaResource::fromMap($map['MetaResource']);
        }

        return $model;
    }
}
