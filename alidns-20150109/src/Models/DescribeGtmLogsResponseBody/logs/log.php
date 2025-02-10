<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponseBody\logs;

use AlibabaCloud\Dara\Model;

class log extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $entityName;
    /**
     * @var string
     */
    public $entityType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $operAction;
    /**
     * @var string
     */
    public $operIp;
    /**
     * @var string
     */
    public $operTime;
    /**
     * @var int
     */
    public $operTimestamp;
    protected $_name = [
        'content'       => 'Content',
        'entityId'      => 'EntityId',
        'entityName'    => 'EntityName',
        'entityType'    => 'EntityType',
        'id'            => 'Id',
        'operAction'    => 'OperAction',
        'operIp'        => 'OperIp',
        'operTime'      => 'OperTime',
        'operTimestamp' => 'OperTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->operAction) {
            $res['OperAction'] = $this->operAction;
        }

        if (null !== $this->operIp) {
            $res['OperIp'] = $this->operIp;
        }

        if (null !== $this->operTime) {
            $res['OperTime'] = $this->operTime;
        }

        if (null !== $this->operTimestamp) {
            $res['OperTimestamp'] = $this->operTimestamp;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OperAction'])) {
            $model->operAction = $map['OperAction'];
        }

        if (isset($map['OperIp'])) {
            $model->operIp = $map['OperIp'];
        }

        if (isset($map['OperTime'])) {
            $model->operTime = $map['OperTime'];
        }

        if (isset($map['OperTimestamp'])) {
            $model->operTimestamp = $map['OperTimestamp'];
        }

        return $model;
    }
}
