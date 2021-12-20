<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponse\officeSiteOverviewResults;
use AlibabaCloud\Tea\Model;

class ListOfficeSiteOverviewResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var officeSiteOverviewResults[]
     */
    public $officeSiteOverviewResults;
    protected $_name = [
        'nextToken'                 => 'NextToken',
        'requestId'                 => 'RequestId',
        'officeSiteOverviewResults' => 'OfficeSiteOverviewResults',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('officeSiteOverviewResults', $this->officeSiteOverviewResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOfficeSiteOverviewResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
