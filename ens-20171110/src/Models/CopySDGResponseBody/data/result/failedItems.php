<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CopySDGResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class failedItems extends Model
{
    /**
     * @description The ID of the destination node.
     *
     * @example cn-hangzhou-xxx
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description The error message.
     *
     * @example region not found
     *
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'destinationRegionId' => 'DestinationRegionId',
        'errorMessage'        => 'ErrorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return failedItems
     */
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
