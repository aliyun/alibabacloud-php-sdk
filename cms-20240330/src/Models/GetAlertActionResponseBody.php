<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAlertActionResponseBody\alertActions;

class GetAlertActionResponseBody extends Model
{
    /**
     * @var alertActions
     */
    public $alertActions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertActions' => 'alertActions',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->alertActions) {
            $this->alertActions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertActions) {
            $res['alertActions'] = null !== $this->alertActions ? $this->alertActions->toArray($noStream) : $this->alertActions;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['alertActions'])) {
            $model->alertActions = alertActions::fromMap($map['alertActions']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
