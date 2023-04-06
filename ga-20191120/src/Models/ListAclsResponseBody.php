<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsResponseBody\acls;
use AlibabaCloud\Tea\Model;

class ListAclsResponseBody extends Model
{
    /**
     * @description The network ACLs.
     *
     * @var acls[]
     */
    public $acls;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If **NextToken** is not returned, it indicates that no additional results exist.
     *   If **NextToken** is returned, the value is the token that is used for the next query.
     *
     * @example FFmyTO70t****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 64ADAB1E-0B7F-4FD8-A404-3BECC0E9CCFF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'acls'       => 'Acls',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acls) {
            $res['Acls'] = [];
            if (null !== $this->acls && \is_array($this->acls)) {
                $n = 0;
                foreach ($this->acls as $item) {
                    $res['Acls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAclsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acls'])) {
            if (!empty($map['Acls'])) {
                $model->acls = [];
                $n           = 0;
                foreach ($map['Acls'] as $item) {
                    $model->acls[$n++] = null !== $item ? acls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
