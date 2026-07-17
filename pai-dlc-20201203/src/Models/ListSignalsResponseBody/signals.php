<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSignalsResponseBody;

use AlibabaCloud\Dara\Model;

class signals extends Model
{
    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $podNames;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $signal;

    /**
     * @var string
     */
    public $signalId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'message' => 'Message',
        'podNames' => 'PodNames',
        'reason' => 'Reason',
        'roles' => 'Roles',
        'scope' => 'Scope',
        'signal' => 'Signal',
        'signalId' => 'SignalId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->podNames)) {
            Model::validateArray($this->podNames);
        }
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->podNames) {
            if (\is_array($this->podNames)) {
                $res['PodNames'] = [];
                $n1 = 0;
                foreach ($this->podNames as $item1) {
                    $res['PodNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->signal) {
            $res['Signal'] = $this->signal;
        }

        if (null !== $this->signalId) {
            $res['SignalId'] = $this->signalId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PodNames'])) {
            if (!empty($map['PodNames'])) {
                $model->podNames = [];
                $n1 = 0;
                foreach ($map['PodNames'] as $item1) {
                    $model->podNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Signal'])) {
            $model->signal = $map['Signal'];
        }

        if (isset($map['SignalId'])) {
            $model->signalId = $map['SignalId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
