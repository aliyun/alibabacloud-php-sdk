<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class Hugepage extends Model
{
    /**
     * @var int
     */
    public $khugepagedAllocSleepMillisecs;

    /**
     * @var int
     */
    public $khugepagedDefrag;

    /**
     * @var int
     */
    public $khugepagedPagesToScan;

    /**
     * @var int
     */
    public $khugepagedScanSleepMillisecs;

    /**
     * @var string
     */
    public $transparentDefrag;

    /**
     * @var string
     */
    public $transparentEnabled;
    protected $_name = [
        'khugepagedAllocSleepMillisecs' => 'khugepagedAllocSleepMillisecs',
        'khugepagedDefrag' => 'khugepagedDefrag',
        'khugepagedPagesToScan' => 'khugepagedPagesToScan',
        'khugepagedScanSleepMillisecs' => 'khugepagedScanSleepMillisecs',
        'transparentDefrag' => 'transparentDefrag',
        'transparentEnabled' => 'transparentEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->khugepagedAllocSleepMillisecs) {
            $res['khugepagedAllocSleepMillisecs'] = $this->khugepagedAllocSleepMillisecs;
        }

        if (null !== $this->khugepagedDefrag) {
            $res['khugepagedDefrag'] = $this->khugepagedDefrag;
        }

        if (null !== $this->khugepagedPagesToScan) {
            $res['khugepagedPagesToScan'] = $this->khugepagedPagesToScan;
        }

        if (null !== $this->khugepagedScanSleepMillisecs) {
            $res['khugepagedScanSleepMillisecs'] = $this->khugepagedScanSleepMillisecs;
        }

        if (null !== $this->transparentDefrag) {
            $res['transparentDefrag'] = $this->transparentDefrag;
        }

        if (null !== $this->transparentEnabled) {
            $res['transparentEnabled'] = $this->transparentEnabled;
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
        if (isset($map['khugepagedAllocSleepMillisecs'])) {
            $model->khugepagedAllocSleepMillisecs = $map['khugepagedAllocSleepMillisecs'];
        }

        if (isset($map['khugepagedDefrag'])) {
            $model->khugepagedDefrag = $map['khugepagedDefrag'];
        }

        if (isset($map['khugepagedPagesToScan'])) {
            $model->khugepagedPagesToScan = $map['khugepagedPagesToScan'];
        }

        if (isset($map['khugepagedScanSleepMillisecs'])) {
            $model->khugepagedScanSleepMillisecs = $map['khugepagedScanSleepMillisecs'];
        }

        if (isset($map['transparentDefrag'])) {
            $model->transparentDefrag = $map['transparentDefrag'];
        }

        if (isset($map['transparentEnabled'])) {
            $model->transparentEnabled = $map['transparentEnabled'];
        }

        return $model;
    }
}
