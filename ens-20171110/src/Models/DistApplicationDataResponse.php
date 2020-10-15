<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponse\distInstanceIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponse\distResults;
use AlibabaCloud\Tea\Model;

class DistApplicationDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $distInstanceTotalCount;

    /**
     * @var distResults
     */
    public $distResults;

    /**
     * @var distInstanceIds
     */
    public $distInstanceIds;
    protected $_name = [
        'requestId'              => 'RequestId',
        'distInstanceTotalCount' => 'DistInstanceTotalCount',
        'distResults'            => 'DistResults',
        'distInstanceIds'        => 'DistInstanceIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('distInstanceTotalCount', $this->distInstanceTotalCount, true);
        Model::validateRequired('distResults', $this->distResults, true);
        Model::validateRequired('distInstanceIds', $this->distInstanceIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->distInstanceTotalCount) {
            $res['DistInstanceTotalCount'] = $this->distInstanceTotalCount;
        }
        if (null !== $this->distResults) {
            $res['DistResults'] = null !== $this->distResults ? $this->distResults->toMap() : null;
        }
        if (null !== $this->distInstanceIds) {
            $res['DistInstanceIds'] = null !== $this->distInstanceIds ? $this->distInstanceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DistApplicationDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DistInstanceTotalCount'])) {
            $model->distInstanceTotalCount = $map['DistInstanceTotalCount'];
        }
        if (isset($map['DistResults'])) {
            $model->distResults = distResults::fromMap($map['DistResults']);
        }
        if (isset($map['DistInstanceIds'])) {
            $model->distInstanceIds = distInstanceIds::fromMap($map['DistInstanceIds']);
        }

        return $model;
    }
}
