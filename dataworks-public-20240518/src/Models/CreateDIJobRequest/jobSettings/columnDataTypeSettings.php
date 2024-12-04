<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\jobSettings;

use AlibabaCloud\Tea\Model;

class columnDataTypeSettings extends Model
{
    /**
     * @description The data type of the destination field.
     *
     * @example text
     *
     * @var string
     */
    public $destinationDataType;

    /**
     * @description The data type of the source field.
     *
     * @example bigint
     *
     * @var string
     */
    public $sourceDataType;
    protected $_name = [
        'destinationDataType' => 'DestinationDataType',
        'sourceDataType'      => 'SourceDataType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return columnDataTypeSettings
     */
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
