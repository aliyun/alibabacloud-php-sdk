<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodEditingUsageDataResponseBody;

use AlibabaCloud\Tea\Model;

class editingData extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $duration;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example H264.SD
     *
     * @var string
     */
    public $specification;

    /**
     * @example 2024-11-06T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'duration' => 'Duration',
        'region' => 'Region',
        'specification' => 'Specification',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
