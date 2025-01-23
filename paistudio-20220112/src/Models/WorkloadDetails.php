<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->DLC) {
            $this->DLC->validate();
        }
        if (null !== $this->DSW) {
            $this->DSW->validate();
        }
        if (null !== $this->EAS) {
            $this->EAS->validate();
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DLC) {
            $res['DLC'] = null !== $this->DLC ? $this->DLC->toArray($noStream) : $this->DLC;
        }

        if (null !== $this->DSW) {
            $res['DSW'] = null !== $this->DSW ? $this->DSW->toArray($noStream) : $this->DSW;
        }

        if (null !== $this->EAS) {
            $res['EAS'] = null !== $this->EAS ? $this->EAS->toArray($noStream) : $this->EAS;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
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
