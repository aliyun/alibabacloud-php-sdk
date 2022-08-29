<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeMeterImsSummaryRequest extends Model
{
    /**
     * @var int
     */
    public $endTs;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $startTs;
    protected $_name = [
        'endTs'   => 'EndTs',
        'region'  => 'Region',
        'startTs' => 'StartTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeterImsSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
