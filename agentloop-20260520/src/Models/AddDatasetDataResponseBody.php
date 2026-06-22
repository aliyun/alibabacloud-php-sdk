<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class AddDatasetDataResponseBody extends Model
{
    /**
     * @var int
     */
    public $affectedRows;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'affectedRows' => 'affectedRows',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedRows) {
            $res['affectedRows'] = $this->affectedRows;
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
        if (isset($map['affectedRows'])) {
            $model->affectedRows = $map['affectedRows'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
