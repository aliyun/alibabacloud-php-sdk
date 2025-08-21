<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class SetWaitingRoomConfigRequest extends Model
{
    /**
     * @var int
     */
    public $allowPct;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $gapTime;

    /**
     * @var int
     */
    public $maxTimeWait;

    /**
     * @var string
     */
    public $waitUri;

    /**
     * @var string
     */
    public $waitUrl;
    protected $_name = [
        'allowPct' => 'AllowPct',
        'domainName' => 'DomainName',
        'gapTime' => 'GapTime',
        'maxTimeWait' => 'MaxTimeWait',
        'waitUri' => 'WaitUri',
        'waitUrl' => 'WaitUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
