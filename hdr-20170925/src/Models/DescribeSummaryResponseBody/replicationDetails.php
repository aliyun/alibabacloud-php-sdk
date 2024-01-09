<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails\criticalServers;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails\notApplicableServers;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails\warningServers;
use AlibabaCloud\Tea\Model;

class replicationDetails extends Model
{
    /**
     * @var criticalServers
     */
    public $criticalServers;

    /**
     * @var notApplicableServers
     */
    public $notApplicableServers;

    /**
     * @var warningServers
     */
    public $warningServers;
    protected $_name = [
        'criticalServers'      => 'CriticalServers',
        'notApplicableServers' => 'NotApplicableServers',
        'warningServers'       => 'WarningServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criticalServers) {
            $res['CriticalServers'] = null !== $this->criticalServers ? $this->criticalServers->toMap() : null;
        }
        if (null !== $this->notApplicableServers) {
            $res['NotApplicableServers'] = null !== $this->notApplicableServers ? $this->notApplicableServers->toMap() : null;
        }
        if (null !== $this->warningServers) {
            $res['WarningServers'] = null !== $this->warningServers ? $this->warningServers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicationDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CriticalServers'])) {
            $model->criticalServers = criticalServers::fromMap($map['CriticalServers']);
        }
        if (isset($map['NotApplicableServers'])) {
            $model->notApplicableServers = notApplicableServers::fromMap($map['NotApplicableServers']);
        }
        if (isset($map['WarningServers'])) {
            $model->warningServers = warningServers::fromMap($map['WarningServers']);
        }

        return $model;
    }
}
