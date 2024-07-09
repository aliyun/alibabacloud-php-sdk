<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponseBody;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponseBody\data\sqlOutputs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of time that is consumed by SQL queries.
     *
     * @var int[]
     */
    public $executionTime;

    /**
     * @description The error code.
     *
     * @example ERROR-102
     *
     * @var string
     */
    public $sqlErrorCode;

    /**
     * @description The error message.
     *
     * @example error message
     *
     * @var string
     */
    public $sqlErrorMessage;

    /**
     * @description The query results.
     *
     * @var sqlOutputs[]
     */
    public $sqlOutputs;

    /**
     * @description The query status.
     *
     * Valid values:
     *
     *   running
     *   available
     *   cancelled
     *   error
     *   cancelling
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The query ID.
     *
     * @example st-1231311abadfaa
     *
     * @var string
     */
    public $statementId;
    protected $_name = [
        'executionTime'   => 'executionTime',
        'sqlErrorCode'    => 'sqlErrorCode',
        'sqlErrorMessage' => 'sqlErrorMessage',
        'sqlOutputs'      => 'sqlOutputs',
        'state'           => 'state',
        'statementId'     => 'statementId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionTime) {
            $res['executionTime'] = $this->executionTime;
        }
        if (null !== $this->sqlErrorCode) {
            $res['sqlErrorCode'] = $this->sqlErrorCode;
        }
        if (null !== $this->sqlErrorMessage) {
            $res['sqlErrorMessage'] = $this->sqlErrorMessage;
        }
        if (null !== $this->sqlOutputs) {
            $res['sqlOutputs'] = [];
            if (null !== $this->sqlOutputs && \is_array($this->sqlOutputs)) {
                $n = 0;
                foreach ($this->sqlOutputs as $item) {
                    $res['sqlOutputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->statementId) {
            $res['statementId'] = $this->statementId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executionTime'])) {
            if (!empty($map['executionTime'])) {
                $model->executionTime = $map['executionTime'];
            }
        }
        if (isset($map['sqlErrorCode'])) {
            $model->sqlErrorCode = $map['sqlErrorCode'];
        }
        if (isset($map['sqlErrorMessage'])) {
            $model->sqlErrorMessage = $map['sqlErrorMessage'];
        }
        if (isset($map['sqlOutputs'])) {
            if (!empty($map['sqlOutputs'])) {
                $model->sqlOutputs = [];
                $n                 = 0;
                foreach ($map['sqlOutputs'] as $item) {
                    $model->sqlOutputs[$n++] = null !== $item ? sqlOutputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['statementId'])) {
            $model->statementId = $map['statementId'];
        }

        return $model;
    }
}
