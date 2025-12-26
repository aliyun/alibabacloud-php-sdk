<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Flow;

use AlibabaCloud\Dara\Model;

class runtime extends Model
{
    /**
     * @var string
     */
    public $runtimeId;

    /**
     * @var string
     */
    public $runtimeName;

    /**
     * @var string
     */
    public $runtimeStatus;

    /**
     * @var string
     */
    public $runtimeType;

    /**
     * @var bool
     */
    public $supportSSEStream;
    protected $_name = [
        'runtimeId' => 'RuntimeId',
        'runtimeName' => 'RuntimeName',
        'runtimeStatus' => 'RuntimeStatus',
        'runtimeType' => 'RuntimeType',
        'supportSSEStream' => 'SupportSSEStream',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
        }

        if (null !== $this->runtimeName) {
            $res['RuntimeName'] = $this->runtimeName;
        }

        if (null !== $this->runtimeStatus) {
            $res['RuntimeStatus'] = $this->runtimeStatus;
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
        }

        if (null !== $this->supportSSEStream) {
            $res['SupportSSEStream'] = $this->supportSSEStream;
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
        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        if (isset($map['RuntimeName'])) {
            $model->runtimeName = $map['RuntimeName'];
        }

        if (isset($map['RuntimeStatus'])) {
            $model->runtimeStatus = $map['RuntimeStatus'];
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        if (isset($map['SupportSSEStream'])) {
            $model->supportSSEStream = $map['SupportSSEStream'];
        }

        return $model;
    }
}
