<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs;

use AlibabaCloud\Tea\Model;

class changeLog extends Model
{
    /**
     * @var int
     */
    public $operTimestamp;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $operObject;

    /**
     * @var string
     */
    public $operTime;

    /**
     * @var string
     */
    public $operIp;

    /**
     * @var string
     */
    public $operAction;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'operTimestamp' => 'OperTimestamp',
        'entityId'      => 'EntityId',
        'operObject'    => 'OperObject',
        'operTime'      => 'OperTime',
        'operIp'        => 'OperIp',
        'operAction'    => 'OperAction',
        'content'       => 'Content',
        'entityName'    => 'EntityName',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operTimestamp) {
            $res['OperTimestamp'] = $this->operTimestamp;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->operObject) {
            $res['OperObject'] = $this->operObject;
        }
        if (null !== $this->operTime) {
            $res['OperTime'] = $this->operTime;
        }
        if (null !== $this->operIp) {
            $res['OperIp'] = $this->operIp;
        }
        if (null !== $this->operAction) {
            $res['OperAction'] = $this->operAction;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperTimestamp'])) {
            $model->operTimestamp = $map['OperTimestamp'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['OperObject'])) {
            $model->operObject = $map['OperObject'];
        }
        if (isset($map['OperTime'])) {
            $model->operTime = $map['OperTime'];
        }
        if (isset($map['OperIp'])) {
            $model->operIp = $map['OperIp'];
        }
        if (isset($map['OperAction'])) {
            $model->operAction = $map['OperAction'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
