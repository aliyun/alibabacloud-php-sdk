<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponseBody\officeSiteOverviewResults;
use AlibabaCloud\Tea\Model;

class ListOfficeSiteOverviewResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var officeSiteOverviewResults[]
     */
    public $officeSiteOverviewResults;

    /**
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
