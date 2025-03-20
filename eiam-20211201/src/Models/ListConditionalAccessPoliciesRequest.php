<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListConditionalAccessPoliciesRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Number of items per page in a paginated query.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Token for the next page query.
     *
     * @example NTxxxxxexample
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Token for the previous page query.
     *
     * @example PTxxxxxexample
     *
     * @var string
     */
    public $previousToken;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'previousToken' => 'PreviousToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConditionalAccessPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }

        return $model;
    }
}
