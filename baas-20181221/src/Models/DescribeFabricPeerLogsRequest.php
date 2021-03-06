<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricPeerLogsRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $peerName;

    /**
     * @var string
     */
    public $lines;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'peerName'       => 'PeerName',
        'lines'          => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->peerName) {
            $res['PeerName'] = $this->peerName;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricPeerLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['PeerName'])) {
            $model->peerName = $map['PeerName'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }

        return $model;
    }
}
