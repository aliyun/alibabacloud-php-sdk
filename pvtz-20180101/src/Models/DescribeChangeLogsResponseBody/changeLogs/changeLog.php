<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs;

use AlibabaCloud\Tea\Model;

class changeLog extends Model
{
    /**
     * @example add test-api.com
     *
     * @var string
     */
    public $content;

    /**
     * @example CAgICA1OA_58
     *
     * @var string
     */
    public $entityId;

    /**
     * @example test-api.com
     *
     * @var string
     */
    public $entityName;

    /**
     * @example 6726
     *
     * @var int
     */
    public $id;

    /**
     * @example add
     *
     * @var string
     */
    public $operAction;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $operIp;

    /**
     * @example PV_ZONE
     *
     * @var string
     */
    public $operObject;

    /**
     * @example 2018-01-24T07:35Z
     *
     * @var string
     */
    public $operTime;

    /**
     * @example 1516779348000
     *
     * @var int
     */
    public $operTimestamp;
    protected $_name = [
        'content'       => 'Content',
        'entityId'      => 'EntityId',
        'entityName'    => 'EntityName',
        'id'            => 'Id',
        'operAction'    => 'OperAction',
        'operIp'        => 'OperIp',
        'operObject'    => 'OperObject',
        'operTime'      => 'OperTime',
        'operTimestamp' => 'OperTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->operAction) {
            $res['OperAction'] = $this->operAction;
        }
        if (null !== $this->operIp) {
            $res['OperIp'] = $this->operIp;
        }
        if (null !== $this->operObject) {
            $res['OperObject'] = $this->operObject;
        }
        if (null !== $this->operTime) {
            $res['OperTime'] = $this->operTime;
        }
        if (null !== $this->operTimestamp) {
            $res['OperTimestamp'] = $this->operTimestamp;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
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
        if (isset($map['OperObject'])) {
            $model->operObject = $map['OperObject'];
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
