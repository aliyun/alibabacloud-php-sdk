<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListAScriptsRequest extends Model
{
    /**
     * @description The AScript rule IDs.
     *
     * @var string[]
     */
    public $AScriptIds;

    /**
     * @description The names of the AScript rules.
     *
     * @var string[]
     */
    public $AScriptNames;

    /**
     * @description The listener IDs.
     *
     * @var string[]
     */
    public $listenerIds;

    /**
     * @description The maximum number of entries to return.
     *
     * Valid values: **1** to **100**.
     *
     * Default value: **20**. If you do not specify this parameter, the default value is used.
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.****
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'AScriptIds'   => 'AScriptIds',
        'AScriptNames' => 'AScriptNames',
        'listenerIds'  => 'ListenerIds',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScriptIds) {
            $res['AScriptIds'] = $this->AScriptIds;
        }
        if (null !== $this->AScriptNames) {
            $res['AScriptNames'] = $this->AScriptNames;
        }
        if (null !== $this->listenerIds) {
            $res['ListenerIds'] = $this->listenerIds;
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
     * @return ListAScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AScriptIds'])) {
            if (!empty($map['AScriptIds'])) {
                $model->AScriptIds = $map['AScriptIds'];
            }
        }
        if (isset($map['AScriptNames'])) {
            if (!empty($map['AScriptNames'])) {
                $model->AScriptNames = $map['AScriptNames'];
            }
        }
        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = $map['ListenerIds'];
            }
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
