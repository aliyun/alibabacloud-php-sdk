<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QuerySystemEntitiesRequest extends Model
{
    /**
     * @var string
     */
    public $entityName;
    protected $_name = [
        'entityName' => 'EntityName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySystemEntitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        return $model;
    }
}
