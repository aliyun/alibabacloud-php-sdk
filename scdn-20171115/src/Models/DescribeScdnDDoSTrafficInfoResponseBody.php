<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody\bpsDrops;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody\bpsTotals;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody\ppsDrops;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody\ppsTotals;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody\timeScopes;
use AlibabaCloud\Tea\Model;

class DescribeScdnDDoSTrafficInfoResponseBody extends Model
{
    /**
     * @var bpsDrops
     */
    public $bpsDrops;

    /**
     * @var bpsTotals
     */
    public $bpsTotals;

    /**
     * @var ppsDrops
     */
    public $ppsDrops;

    /**
     * @var ppsTotals
     */
    public $ppsTotals;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeScopes
     */
    public $timeScopes;
    protected $_name = [
        'bpsDrops'   => 'BpsDrops',
        'bpsTotals'  => 'BpsTotals',
        'ppsDrops'   => 'PpsDrops',
        'ppsTotals'  => 'PpsTotals',
        'requestId'  => 'RequestId',
        'timeScopes' => 'TimeScopes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsDrops) {
            $res['BpsDrops'] = null !== $this->bpsDrops ? $this->bpsDrops->toMap() : null;
        }
        if (null !== $this->bpsTotals) {
            $res['BpsTotals'] = null !== $this->bpsTotals ? $this->bpsTotals->toMap() : null;
        }
        if (null !== $this->ppsDrops) {
            $res['PpsDrops'] = null !== $this->ppsDrops ? $this->ppsDrops->toMap() : null;
        }
        if (null !== $this->ppsTotals) {
            $res['PpsTotals'] = null !== $this->ppsTotals ? $this->ppsTotals->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeScopes) {
            $res['TimeScopes'] = null !== $this->timeScopes ? $this->timeScopes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnDDoSTrafficInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsDrops'])) {
            $model->bpsDrops = bpsDrops::fromMap($map['BpsDrops']);
        }
        if (isset($map['BpsTotals'])) {
            $model->bpsTotals = bpsTotals::fromMap($map['BpsTotals']);
        }
        if (isset($map['PpsDrops'])) {
            $model->ppsDrops = ppsDrops::fromMap($map['PpsDrops']);
        }
        if (isset($map['PpsTotals'])) {
            $model->ppsTotals = ppsTotals::fromMap($map['PpsTotals']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeScopes'])) {
            $model->timeScopes = timeScopes::fromMap($map['TimeScopes']);
        }

        return $model;
    }
}
