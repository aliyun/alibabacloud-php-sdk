<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcQpsInfoResponseBody\attacks;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcQpsInfoResponseBody\timeScopes;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcQpsInfoResponseBody\totals;
use AlibabaCloud\Tea\Model;

class DescribeScdnCcQpsInfoResponseBody extends Model
{
    /**
     * @var attacks
     */
    public $attacks;

    /**
     * @example FA2EE241-5E9D-488A-B36E-408BF81C077E
     *
     * @var string
     */
    public $requestId;

    /**
     * @var timeScopes
     */
    public $timeScopes;

    /**
     * @var totals
     */
    public $totals;
    protected $_name = [
        'attacks'    => 'Attacks',
        'requestId'  => 'RequestId',
        'timeScopes' => 'TimeScopes',
        'totals'     => 'Totals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attacks) {
            $res['Attacks'] = null !== $this->attacks ? $this->attacks->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeScopes) {
            $res['TimeScopes'] = null !== $this->timeScopes ? $this->timeScopes->toMap() : null;
        }
        if (null !== $this->totals) {
            $res['Totals'] = null !== $this->totals ? $this->totals->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnCcQpsInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attacks'])) {
            $model->attacks = attacks::fromMap($map['Attacks']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeScopes'])) {
            $model->timeScopes = timeScopes::fromMap($map['TimeScopes']);
        }
        if (isset($map['Totals'])) {
            $model->totals = totals::fromMap($map['Totals']);
        }

        return $model;
    }
}
