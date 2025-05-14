<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks\networkTopology;

use AlibabaCloud\Dara\Model;

class destinations extends Model
{
    /**
     * @var string
     */
    public $destinationFileSystemPath;

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var string
     */
    public $destinationRegion;

    /**
     * @var string
     */
    public $destinationType;
    protected $_name = [
        'destinationFileSystemPath' => 'DestinationFileSystemPath',
        'destinationId' => 'DestinationId',
        'destinationRegion' => 'DestinationRegion',
        'destinationType' => 'DestinationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationFileSystemPath) {
            $res['DestinationFileSystemPath'] = $this->destinationFileSystemPath;
        }

        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }

        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
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
        if (isset($map['DestinationFileSystemPath'])) {
            $model->destinationFileSystemPath = $map['DestinationFileSystemPath'];
        }

        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }

        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        return $model;
    }
}
