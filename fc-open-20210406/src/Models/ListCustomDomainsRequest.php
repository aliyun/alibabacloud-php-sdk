<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListCustomDomainsRequest extends Model
{
    /**
     * @description The maximum number of resources to return. Valid values: \[0,100]. Default value: 20. The number of returned results is less than or equal to the specified number.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token that is required for pagination. If the number of resources exceeds the limit, the nextToken parameter is returned. You can include the parameter in subsequent calls to obtain more results. You do not need to provide this parameter in the first call.
     *
     * @example fc-thinkphp-demo.functioncompute.com
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The prefix that the returned domain names must contain.
     *
     * @example prefix_text
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The starting position of the result list. The returned resources are sorted in alphabetical order, and the resources that include and follow the resource specified by the startKey parameter are returned.
     *
     * @example next_service
     *
     * @var string
     */
    public $startKey;
    protected $_name = [
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'prefix'    => 'prefix',
        'startKey'  => 'startKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->startKey) {
            $res['startKey'] = $this->startKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['startKey'])) {
            $model->startKey = $map['startKey'];
        }

        return $model;
    }
}
