<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateDSEntityRequest extends Model
{
    /**
     * @description 实体名称，仅支持中文、大小写字母、数字、下划线
     *
     * @var string
     */
    public $entityName;

    /**
     * @description 实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]
     *
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'entityName' => 'EntityName',
        'entityType' => 'EntityType',
        'instanceId' => 'InstanceId',
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
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDSEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
