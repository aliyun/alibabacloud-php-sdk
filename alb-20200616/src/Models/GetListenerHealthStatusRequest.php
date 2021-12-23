<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class GetListenerHealthStatusRequest extends Model
{
    /**
     * @description 是否包含转发规则健康检查结果
     *
     * @var bool
     */
    public $includeRule;

    /**
     * @description 监听Id
     *
     * @var string
     */
    public $listenerId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'includeRule' => 'IncludeRule',
        'listenerId'  => 'ListenerId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeRule) {
            $res['IncludeRule'] = $this->includeRule;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListenerHealthStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeRule'])) {
            $model->includeRule = $map['IncludeRule'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
