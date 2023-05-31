<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterVulStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class vulStat extends Model
{
    /**
     * @description The number of high-risk vulnerabilities.
     *
     * @example 13
     *
     * @var string
     */
    public $asapCount;

    /**
     * @description The number of medium-risk vulnerabilities.
     *
     * @example 21
     *
     * @var string
     */
    public $laterCount;

    /**
     * @description The number of low-risk vulnerabilities.
     *
     * @example 0
     *
     * @var string
     */
    public $nntfCount;
    protected $_name = [
        'asapCount'  => 'AsapCount',
        'laterCount' => 'LaterCount',
        'nntfCount'  => 'NntfCount',
    ];

    public function validate()
    {
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulStat
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

        return $model;
    }
}
