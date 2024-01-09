<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails\criticalServers\criticalServer;
use AlibabaCloud\Tea\Model;

class criticalServers extends Model
{
    /**
     * @var criticalServer[]
     */
    public $criticalServer;
    protected $_name = [
        'criticalServer' => 'criticalServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criticalServer) {
            $res['criticalServer'] = [];
            if (null !== $this->criticalServer && \is_array($this->criticalServer)) {
                $n = 0;
                foreach ($this->criticalServer as $item) {
                    $res['criticalServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return criticalServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['criticalServer'])) {
            if (!empty($map['criticalServer'])) {
                $model->criticalServer = [];
                $n                     = 0;
                foreach ($map['criticalServer'] as $item) {
                    $model->criticalServer[$n++] = null !== $item ? criticalServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
