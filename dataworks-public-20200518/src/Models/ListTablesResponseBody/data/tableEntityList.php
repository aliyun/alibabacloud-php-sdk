<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data\tableEntityList\entityContent;
use AlibabaCloud\Tea\Model;

class tableEntityList extends Model
{
    /**
     * @var entityContent
     */
    public $entityContent;

    /**
     * @example maxcompute-table.project.table
     *
     * @var string
     */
    public $entityQualifiedName;
    protected $_name = [
        'entityContent'       => 'EntityContent',
        'entityQualifiedName' => 'EntityQualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityContent) {
            $res['EntityContent'] = null !== $this->entityContent ? $this->entityContent->toMap() : null;
        }
        if (null !== $this->entityQualifiedName) {
            $res['EntityQualifiedName'] = $this->entityQualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityContent'])) {
            $model->entityContent = entityContent::fromMap($map['EntityContent']);
        }
        if (isset($map['EntityQualifiedName'])) {
            $model->entityQualifiedName = $map['EntityQualifiedName'];
        }

        return $model;
    }
}
