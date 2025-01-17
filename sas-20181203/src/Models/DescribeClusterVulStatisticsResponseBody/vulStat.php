<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterVulStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class vulStat extends Model
{
    /**
     * @var string
     */
    public $asapCount;
    /**
     * @var string
     */
    public $laterCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
