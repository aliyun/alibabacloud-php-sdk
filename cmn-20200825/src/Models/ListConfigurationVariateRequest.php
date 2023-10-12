<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListConfigurationVariateRequest extends Model
{
    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example project
     *
     * @var string
     */
    public $variateName;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'variateName' => 'VariateName',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->variateName) {
            $res['VariateName'] = $this->variateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigurationVariateRequest
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
        if (isset($map['VariateName'])) {
            $model->variateName = $map['VariateName'];
        }

        return $model;
    }
}
