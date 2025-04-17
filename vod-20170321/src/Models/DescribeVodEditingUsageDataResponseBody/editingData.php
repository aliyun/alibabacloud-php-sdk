<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodEditingUsageDataResponseBody;

use AlibabaCloud\Dara\Model;

class editingData extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'duration' => 'Duration',
        'region' => 'Region',
        'specification' => 'Specification',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
