<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricPeerLogsRequest extends Model
{
    /**
     * @example 50
     *
     * @var string
     */
    public $lines;

    /**
     * @description This parameter is required.
     *
     * @example peers-test11-tzwny25vqicq
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @example peer1
     *
     * @var string
     */
    public $peerName;
    protected $_name = [
        'lines'          => 'Lines',
        'organizationId' => 'OrganizationId',
        'peerName'       => 'PeerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
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
     * @return DescribeFabricPeerLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
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
