<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobResponseBody\job;

use AlibabaCloud\Dara\Model;

class delivery extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var bool
     */
    public $bestEffort;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'accountId' => 'AccountId',
        'bestEffort' => 'BestEffort',
        'channel' => 'Channel',
        'mode' => 'Mode',
        'to' => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->bestEffort) {
            $res['BestEffort'] = $this->bestEffort;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['BestEffort'])) {
            $model->bestEffort = $map['BestEffort'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
