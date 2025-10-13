<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20221014\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\GetCoordinationTicketResponseBody\coordinateTicketModel;

class GetCoordinationTicketResponseBody extends Model
{
    /**
     * @var coordinateTicketModel
     */
    public $coordinateTicketModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coordinateTicketModel' => 'CoordinateTicketModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->coordinateTicketModel) {
            $this->coordinateTicketModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coordinateTicketModel) {
            $res['CoordinateTicketModel'] = null !== $this->coordinateTicketModel ? $this->coordinateTicketModel->toArray($noStream) : $this->coordinateTicketModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CoordinateTicketModel'])) {
            $model->coordinateTicketModel = coordinateTicketModel::fromMap($map['CoordinateTicketModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
