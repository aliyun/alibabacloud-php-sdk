<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\UnloadRegionSDGResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class failedItems extends Model
{
    /**
     * @var string
     */
    public $destinationRegionId;

    /**
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'destinationRegionId' => 'DestinationRegionId',
        'errorMessage' => 'ErrorMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}
