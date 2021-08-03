<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulOverviewResponseBody extends Model
{
    /**
     * @var int
     */
    public $nntfCount;

    /**
     * @var int
     */
    public $laterCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $asapCount;
    protected $_name = [
        'nntfCount'  => 'NntfCount',
        'laterCount' => 'LaterCount',
        'requestId'  => 'RequestId',
        'asapCount'  => 'AsapCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }
        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulOverviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }
        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }

        return $model;
    }
}
