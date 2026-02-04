<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderStatusCheckJobResponseBody\identityProviderStatusCheckJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderStatusCheckJobResponseBody\identityProviderStatusCheckJob\jobCheckItems\errorReason;

class jobCheckItems extends Model
{
    /**
     * @var errorReason
     */
    public $errorReason;

    /**
     * @var string
     */
    public $majorCheckItem;

    /**
     * @var string
     */
    public $minorCheckItem;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'errorReason' => 'ErrorReason',
        'majorCheckItem' => 'MajorCheckItem',
        'minorCheckItem' => 'MinorCheckItem',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->errorReason) {
            $this->errorReason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorReason) {
            $res['ErrorReason'] = null !== $this->errorReason ? $this->errorReason->toArray($noStream) : $this->errorReason;
        }

        if (null !== $this->majorCheckItem) {
            $res['MajorCheckItem'] = $this->majorCheckItem;
        }

        if (null !== $this->minorCheckItem) {
            $res['MinorCheckItem'] = $this->minorCheckItem;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['ErrorReason'])) {
            $model->errorReason = errorReason::fromMap($map['ErrorReason']);
        }

        if (isset($map['MajorCheckItem'])) {
            $model->majorCheckItem = $map['MajorCheckItem'];
        }

        if (isset($map['MinorCheckItem'])) {
            $model->minorCheckItem = $map['MinorCheckItem'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
