<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulOverviewResponse extends Model
{
    /**
     * @var int
     */
    public $asapCount;

    /**
     * @var int
     */
    public $laterCount;

    /**
     * @var int
     */
    public $nntfCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'asapCount'  => 'AsapCount',
        'laterCount' => 'LaterCount',
        'nntfCount'  => 'NntfCount',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('asapCount', $this->asapCount, true);
        Model::validateRequired('laterCount', $this->laterCount, true);
        Model::validateRequired('nntfCount', $this->nntfCount, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
        }
        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }
        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulOverviewResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }
        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }
        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
