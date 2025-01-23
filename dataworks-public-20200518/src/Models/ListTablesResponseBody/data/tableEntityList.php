<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data\tableEntityList\entityContent;

class tableEntityList extends Model
{
    /**
     * @var entityContent
     */
    public $entityContent;
    /**
     * @var string
     */
    public $entityQualifiedName;
    protected $_name = [
        'entityContent'       => 'EntityContent',
        'entityQualifiedName' => 'EntityQualifiedName',
    ];

    public function validate()
    {
        if (null !== $this->entityContent) {
            $this->entityContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityContent) {
            $res['EntityContent'] = null !== $this->entityContent ? $this->entityContent->toArray($noStream) : $this->entityContent;
        }

        if (null !== $this->entityQualifiedName) {
            $res['EntityQualifiedName'] = $this->entityQualifiedName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
