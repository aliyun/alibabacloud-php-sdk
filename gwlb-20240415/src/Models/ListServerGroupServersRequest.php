<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Tea\Model;

class ListServerGroupServersRequest extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example sgp-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @var string[]
     */
    public $serverIds;

    /**
     * @var string[]
     */
    public $serverIps;

    /**
     * @example 1
     *
     * @var int
     */
    public $skip;
    protected $_name = [
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'serverGroupId' => 'ServerGroupId',
        'serverIds'     => 'ServerIds',
        'serverIps'     => 'ServerIps',
        'skip'          => 'Skip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->serverIds) {
            $res['ServerIds'] = $this->serverIds;
        }
        if (null !== $this->serverIps) {
            $res['ServerIps'] = $this->serverIps;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServerGroupServersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = $map['ServerIds'];
            }
        }
        if (isset($map['ServerIps'])) {
            if (!empty($map['ServerIps'])) {
                $model->serverIps = $map['ServerIps'];
            }
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        return $model;
    }
}
