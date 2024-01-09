<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairsResponseBody\sitePairs\sitePair;

use AlibabaCloud\Tea\Model;

class replicationStatistics extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $critical;

    /**
     * @example 4
     *
     * @var int
     */
    public $healthy;

    /**
     * @example 0
     *
     * @var int
     */
    public $notApplicable;

    /**
     * @example 0
     *
     * @var int
     */
    public $warning;
    protected $_name = [
        'critical'      => 'Critical',
        'healthy'       => 'Healthy',
        'notApplicable' => 'NotApplicable',
        'warning'       => 'Warning',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = $this->critical;
        }
        if (null !== $this->healthy) {
            $res['Healthy'] = $this->healthy;
        }
        if (null !== $this->notApplicable) {
            $res['NotApplicable'] = $this->notApplicable;
        }
        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicationStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Critical'])) {
            $model->critical = $map['Critical'];
        }
        if (isset($map['Healthy'])) {
            $model->healthy = $map['Healthy'];
        }
        if (isset($map['NotApplicable'])) {
            $model->notApplicable = $map['NotApplicable'];
        }
        if (isset($map['Warning'])) {
            $model->warning = $map['Warning'];
        }

        return $model;
    }
}
