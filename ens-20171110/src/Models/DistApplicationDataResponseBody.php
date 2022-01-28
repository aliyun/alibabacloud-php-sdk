<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponseBody\distInstanceIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponseBody\distResults;
use AlibabaCloud\Tea\Model;

class DistApplicationDataResponseBody extends Model
{
    /**
     * @var distInstanceIds
     */
    public $distInstanceIds;

    /**
     * @var int
     */
    public $distInstanceTotalCount;

    /**
     * @var distResults
     */
    public $distResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'distInstanceIds'        => 'DistInstanceIds',
        'distInstanceTotalCount' => 'DistInstanceTotalCount',
        'distResults'            => 'DistResults',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distInstanceIds) {
            $res['DistInstanceIds'] = null !== $this->distInstanceIds ? $this->distInstanceIds->toMap() : null;
        }
        if (null !== $this->distInstanceTotalCount) {
            $res['DistInstanceTotalCount'] = $this->distInstanceTotalCount;
        }
        if (null !== $this->distResults) {
            $res['DistResults'] = null !== $this->distResults ? $this->distResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DistApplicationDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistInstanceIds'])) {
            $model->distInstanceIds = distInstanceIds::fromMap($map['DistInstanceIds']);
        }
        if (isset($map['DistInstanceTotalCount'])) {
            $model->distInstanceTotalCount = $map['DistInstanceTotalCount'];
        }
        if (isset($map['DistResults'])) {
            $model->distResults = distResults::fromMap($map['DistResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
