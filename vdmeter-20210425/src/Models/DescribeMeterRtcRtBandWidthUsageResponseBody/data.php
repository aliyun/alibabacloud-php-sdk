<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcRtBandWidthUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $anchorPeakRate;

    /**
     * @var int
     */
    public $anchorPeakTs;

    /**
     * @var float
     */
    public $audiencePeakRate;

    /**
     * @var int
     */
    public $audiencePeakTs;

    /**
     * @var float
     */
    public $peakRate;

    /**
     * @var int
     */
    public $peakTs;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'anchorPeakRate'   => 'AnchorPeakRate',
        'anchorPeakTs'     => 'AnchorPeakTs',
        'audiencePeakRate' => 'AudiencePeakRate',
        'audiencePeakTs'   => 'AudiencePeakTs',
        'peakRate'         => 'PeakRate',
        'peakTs'           => 'PeakTs',
        'timestamp'        => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorPeakRate) {
            $res['AnchorPeakRate'] = $this->anchorPeakRate;
        }
        if (null !== $this->anchorPeakTs) {
            $res['AnchorPeakTs'] = $this->anchorPeakTs;
        }
        if (null !== $this->audiencePeakRate) {
            $res['AudiencePeakRate'] = $this->audiencePeakRate;
        }
        if (null !== $this->audiencePeakTs) {
            $res['AudiencePeakTs'] = $this->audiencePeakTs;
        }
        if (null !== $this->peakRate) {
            $res['PeakRate'] = $this->peakRate;
        }
        if (null !== $this->peakTs) {
            $res['PeakTs'] = $this->peakTs;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorPeakRate'])) {
            $model->anchorPeakRate = $map['AnchorPeakRate'];
        }
        if (isset($map['AnchorPeakTs'])) {
            $model->anchorPeakTs = $map['AnchorPeakTs'];
        }
        if (isset($map['AudiencePeakRate'])) {
            $model->audiencePeakRate = $map['AudiencePeakRate'];
        }
        if (isset($map['AudiencePeakTs'])) {
            $model->audiencePeakTs = $map['AudiencePeakTs'];
        }
        if (isset($map['PeakRate'])) {
            $model->peakRate = $map['PeakRate'];
        }
        if (isset($map['PeakTs'])) {
            $model->peakTs = $map['PeakTs'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
