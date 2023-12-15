<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricChaincodeLogsRequest extends Model
{
    /**
     * @var string
     */
    public $chaincodeId;

    /**
     * @var string
     */
    public $lines;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $peerName;
    protected $_name = [
        'chaincodeId'    => 'ChaincodeId',
        'lines'          => 'Lines',
        'offset'         => 'Offset',
        'organizationId' => 'OrganizationId',
        'peerName'       => 'PeerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->peerName) {
            $res['PeerName'] = $this->peerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricChaincodeLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['PeerName'])) {
            $model->peerName = $map['PeerName'];
        }

        return $model;
    }
}
