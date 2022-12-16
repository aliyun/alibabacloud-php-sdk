<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class Entity extends Model
{
    /**
     * @var mixed[]
     */
    public $entityContent;

    /**
     * @example maxcompute_table.563f0357118d05ef145d6bddf2966cc23e86ca8f2f013f915e565afdf09f7a23
     *
     * @var string
     */
    public $qualifiedName;

    /**
     * @example 12345
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'entityContent' => 'EntityContent',
        'qualifiedName' => 'QualifiedName',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityContent) {
            $res['EntityContent'] = $this->entityContent;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Entity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityContent'])) {
            $model->entityContent = $map['EntityContent'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
