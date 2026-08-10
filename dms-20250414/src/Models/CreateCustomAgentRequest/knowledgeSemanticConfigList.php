<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateCustomAgentRequest;

use AlibabaCloud\Dara\Model;

class knowledgeSemanticConfigList extends Model
{
    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $knowledgeUuid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dbId' => 'DbId',
        'instanceId' => 'InstanceId',
        'knowledgeUuid' => 'KnowledgeUuid',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->knowledgeUuid) {
            $res['KnowledgeUuid'] = $this->knowledgeUuid;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KnowledgeUuid'])) {
            $model->knowledgeUuid = $map['KnowledgeUuid'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
