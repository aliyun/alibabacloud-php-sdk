<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\LocationTransferType\transferTypes;
use AlibabaCloud\Tea\Model;

class LocationTransferType extends Model
{
    /**
     * @var string
     */
    public $location;

    /**
     * @var transferTypes
     */
    public $transferTypes;
    protected $_name = [
        'location'      => 'Location',
        'transferTypes' => 'TransferTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->transferTypes) {
            $res['TransferTypes'] = null !== $this->transferTypes ? $this->transferTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LocationTransferType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['TransferTypes'])) {
            $model->transferTypes = transferTypes::fromMap($map['TransferTypes']);
        }

        return $model;
    }
}
