<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\jobSettings;

use AlibabaCloud\Dara\Model;

class columnDataTypeSettings extends Model
{
    /**
     * @var string
     */
    public $destinationDataType;

    /**
     * @var string
     */
    public $sourceDataType;
    protected $_name = [
        'destinationDataType' => 'DestinationDataType',
        'sourceDataType' => 'SourceDataType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationDataType) {
            $res['DestinationDataType'] = $this->destinationDataType;
        }

        if (null !== $this->sourceDataType) {
            $res['SourceDataType'] = $this->sourceDataType;
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
        if (isset($map['DestinationDataType'])) {
            $model->destinationDataType = $map['DestinationDataType'];
        }

        if (isset($map['SourceDataType'])) {
            $model->sourceDataType = $map['SourceDataType'];
        }

        return $model;
    }
}
