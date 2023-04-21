<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponseBody\officeSiteOverviewResults;
use AlibabaCloud\Tea\Model;

class ListOfficeSiteOverviewResponseBody extends Model
{
    /**
     * @description The token that is used to start the next query. If this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Details of the workspaces.
     *
     * @var officeSiteOverviewResults[]
     */
    public $officeSiteOverviewResults;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'                 => 'NextToken',
        'officeSiteOverviewResults' => 'OfficeSiteOverviewResults',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeSiteOverviewResults) {
            $res['OfficeSiteOverviewResults'] = [];
            if (null !== $this->officeSiteOverviewResults && \is_array($this->officeSiteOverviewResults)) {
                $n = 0;
                foreach ($this->officeSiteOverviewResults as $item) {
                    $res['OfficeSiteOverviewResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOfficeSiteOverviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeSiteOverviewResults'])) {
            if (!empty($map['OfficeSiteOverviewResults'])) {
                $model->officeSiteOverviewResults = [];
                $n                                = 0;
                foreach ($map['OfficeSiteOverviewResults'] as $item) {
                    $model->officeSiteOverviewResults[$n++] = null !== $item ? officeSiteOverviewResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
