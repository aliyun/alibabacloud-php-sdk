<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetWaitingRoomConfigRequest extends Model
{
    /**
     * @description The percentage of requests that are allowed to be redirected to the origin server. Valid values: **0** to **100**.
     *
     * This parameter is required.
     * @example 30
     *
     * @var int
     */
    public $allowPct;

    /**
     * @description The accelerated domain name. You can specify only one domain name.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The length of waiting time to skip after an exit from the queue. Unit: seconds.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $gapTime;

    /**
     * @description The maximum length of waiting time in the queue. Unit: seconds.
     *
     * This parameter is required.
     * @example 30
     *
     * @var int
     */
    public $maxTimeWait;

    /**
     * @description The regular expression that is used to match URI strings for which the virtual waiting room feature is enabled.
     *
     * This parameter is required.
     * @var string
     */
    public $waitUri;

    /**
     * @description The URL of the waiting page.
     *
     * This parameter is required.
     * @example https://example.com/waitingroom.html
     *
     * @var string
     */
    public $waitUrl;
    protected $_name = [
        'allowPct'    => 'AllowPct',
        'domainName'  => 'DomainName',
        'gapTime'     => 'GapTime',
        'maxTimeWait' => 'MaxTimeWait',
        'waitUri'     => 'WaitUri',
        'waitUrl'     => 'WaitUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowPct) {
            $res['AllowPct'] = $this->allowPct;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->gapTime) {
            $res['GapTime'] = $this->gapTime;
        }
        if (null !== $this->maxTimeWait) {
            $res['MaxTimeWait'] = $this->maxTimeWait;
        }
        if (null !== $this->waitUri) {
            $res['WaitUri'] = $this->waitUri;
        }
        if (null !== $this->waitUrl) {
            $res['WaitUrl'] = $this->waitUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetWaitingRoomConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowPct'])) {
            $model->allowPct = $map['AllowPct'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GapTime'])) {
            $model->gapTime = $map['GapTime'];
        }
        if (isset($map['MaxTimeWait'])) {
            $model->maxTimeWait = $map['MaxTimeWait'];
        }
        if (isset($map['WaitUri'])) {
            $model->waitUri = $map['WaitUri'];
        }
        if (isset($map['WaitUrl'])) {
            $model->waitUrl = $map['WaitUrl'];
        }

        return $model;
    }
}
