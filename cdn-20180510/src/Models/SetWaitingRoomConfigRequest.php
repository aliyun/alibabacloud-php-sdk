<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetWaitingRoomConfigRequest extends Model
{
    /**
     * @description The percentage of requests that are allowed to be redirected to the origin server. Valid values: **0** to **100**.
     *
     * @example 30
     *
     * @var int
     */
    public $allowPct;

    /**
     * @description The accelerated domain name. You can specify only one domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The length of waiting time to skip after users exit the queue. Unit: seconds.
     *
     * @example 20
     *
     * @var int
     */
    public $gapTime;

    /**
     * @description The maximum length of time that users need to wait in the queue. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $maxTimeWait;

    /**
     * @description The regular expression that is used to match URI strings for which the virtual waiting room feature is enabled.
     *
     * @example xxx
     *
     * @var string
     */
    public $waitUri;

    /**
     * @description The URL of the waiting page.
     *
     * @example WaitUrl
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
