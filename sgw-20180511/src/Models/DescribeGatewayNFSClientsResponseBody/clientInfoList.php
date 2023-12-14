<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayNFSClientsResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayNFSClientsResponseBody\clientInfoList\clientInfo;
use AlibabaCloud\Tea\Model;

class clientInfoList extends Model
{
    /**
     * @var clientInfo[]
     */
    public $clientInfo;
    protected $_name = [
        'clientInfo' => 'ClientInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = [];
            if (null !== $this->clientInfo && \is_array($this->clientInfo)) {
                $n = 0;
                foreach ($this->clientInfo as $item) {
                    $res['ClientInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInfo'])) {
            if (!empty($map['ClientInfo'])) {
                $model->clientInfo = [];
                $n                 = 0;
                foreach ($map['ClientInfo'] as $item) {
                    $model->clientInfo[$n++] = null !== $item ? clientInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
