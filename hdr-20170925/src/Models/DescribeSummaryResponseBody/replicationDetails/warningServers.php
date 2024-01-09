<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails\warningServers\warningServer;
use AlibabaCloud\Tea\Model;

class warningServers extends Model
{
    /**
     * @var warningServer[]
     */
    public $warningServer;
    protected $_name = [
        'warningServer' => 'warningServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->warningServer) {
            $res['warningServer'] = [];
            if (null !== $this->warningServer && \is_array($this->warningServer)) {
                $n = 0;
                foreach ($this->warningServer as $item) {
                    $res['warningServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['warningServer'])) {
            if (!empty($map['warningServer'])) {
                $model->warningServer = [];
                $n                    = 0;
                foreach ($map['warningServer'] as $item) {
                    $model->warningServer[$n++] = null !== $item ? warningServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
