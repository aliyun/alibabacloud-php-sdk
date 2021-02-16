<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeSqlLogTrialStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $everTrialed;

    /**
     * @var string
     */
    public $openTrial;

    /**
     * @var string
     */
    public $remainDays;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $usedDays;
    protected $_name = [
        'requestId'      => 'RequestId',
        'everTrialed'    => 'EverTrialed',
        'openTrial'      => 'OpenTrial',
        'remainDays'     => 'RemainDays',
        'DBInstanceName' => 'DBInstanceName',
        'usedDays'       => 'UsedDays',
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
        if (null !== $this->everTrialed) {
            $res['EverTrialed'] = $this->everTrialed;
        }
        if (null !== $this->openTrial) {
            $res['OpenTrial'] = $this->openTrial;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->usedDays) {
            $res['UsedDays'] = $this->usedDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSqlLogTrialStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EverTrialed'])) {
            $model->everTrialed = $map['EverTrialed'];
        }
        if (isset($map['OpenTrial'])) {
            $model->openTrial = $map['OpenTrial'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['UsedDays'])) {
            $model->usedDays = $map['UsedDays'];
        }

        return $model;
    }
}
