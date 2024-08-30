<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class WorkloadDetails extends Model
{
    /**
     * @var QuotaJob
     */
    public $DLC;

    /**
     * @var QuotaJob
     */
    public $DSW;

    /**
     * @var QuotaJob
     */
    public $EAS;

    /**
     * @var QuotaJob
     */
    public $summary;
    protected $_name = [
        'DLC'     => 'DLC',
        'DSW'     => 'DSW',
        'EAS'     => 'EAS',
        'summary' => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DLC) {
            $res['DLC'] = null !== $this->DLC ? $this->DLC->toMap() : null;
        }
        if (null !== $this->DSW) {
            $res['DSW'] = null !== $this->DSW ? $this->DSW->toMap() : null;
        }
        if (null !== $this->EAS) {
            $res['EAS'] = null !== $this->EAS ? $this->EAS->toMap() : null;
        }
        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WorkloadDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DLC'])) {
            $model->DLC = QuotaJob::fromMap($map['DLC']);
        }
        if (isset($map['DSW'])) {
            $model->DSW = QuotaJob::fromMap($map['DSW']);
        }
        if (isset($map['EAS'])) {
            $model->EAS = QuotaJob::fromMap($map['EAS']);
        }
        if (isset($map['Summary'])) {
            $model->summary = QuotaJob::fromMap($map['Summary']);
        }

        return $model;
    }
}
