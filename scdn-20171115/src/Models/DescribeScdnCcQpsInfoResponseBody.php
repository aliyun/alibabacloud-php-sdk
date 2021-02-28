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

    /**
     * @var attacks
     */
    public $attacks;
    protected $_name = [
        'requestId'  => 'RequestId',
        'timeScopes' => 'TimeScopes',
        'totals'     => 'Totals',
        'attacks'    => 'Attacks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeScopes) {
            $res['TimeScopes'] = null !== $this->timeScopes ? $this->timeScopes->toMap() : null;
        }
        if (null !== $this->totals) {
            $res['Totals'] = null !== $this->totals ? $this->totals->toMap() : null;
        }
        if (null !== $this->attacks) {
            $res['Attacks'] = null !== $this->attacks ? $this->attacks->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeScopes'])) {
            $model->timeScopes = timeScopes::fromMap($map['TimeScopes']);
        }
        if (isset($map['Totals'])) {
            $model->totals = totals::fromMap($map['Totals']);
        }
        if (isset($map['Attacks'])) {
            $model->attacks = attacks::fromMap($map['Attacks']);
        }

        return $model;
    }
}
