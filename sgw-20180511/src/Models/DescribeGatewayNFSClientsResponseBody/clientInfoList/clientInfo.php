<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayNFSClientsResponseBody\clientInfoList;

use AlibabaCloud\Tea\Model;

class clientInfo extends Model
{
    /**
     * @var string
     */
    public $clientIpAddr;

    /**
     * @var bool
     */
    public $hasNFSv3;

    /**
     * @var bool
     */
    public $hasNFSv40;

    /**
     * @var bool
     */
    public $hasNFSv41;
    protected $_name = [
        'clientIpAddr' => 'ClientIpAddr',
        'hasNFSv3'     => 'HasNFSv3',
        'hasNFSv40'    => 'HasNFSv40',
        'hasNFSv41'    => 'HasNFSv41',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIpAddr) {
            $res['ClientIpAddr'] = $this->clientIpAddr;
        }
        if (null !== $this->hasNFSv3) {
            $res['HasNFSv3'] = $this->hasNFSv3;
        }
        if (null !== $this->hasNFSv40) {
            $res['HasNFSv40'] = $this->hasNFSv40;
        }
        if (null !== $this->hasNFSv41) {
            $res['HasNFSv41'] = $this->hasNFSv41;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIpAddr'])) {
            $model->clientIpAddr = $map['ClientIpAddr'];
        }
        if (isset($map['HasNFSv3'])) {
            $model->hasNFSv3 = $map['HasNFSv3'];
        }
        if (isset($map['HasNFSv40'])) {
            $model->hasNFSv40 = $map['HasNFSv40'];
        }
        if (isset($map['HasNFSv41'])) {
            $model->hasNFSv41 = $map['HasNFSv41'];
        }

        return $model;
    }
}
