<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails\notApplicableServers\notApplicableServer;
use AlibabaCloud\Tea\Model;

class notApplicableServers extends Model
{
    /**
     * @var notApplicableServer[]
     */
    public $notApplicableServer;
    protected $_name = [
        'notApplicableServer' => 'notApplicableServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notApplicableServer) {
            $res['notApplicableServer'] = [];
            if (null !== $this->notApplicableServer && \is_array($this->notApplicableServer)) {
                $n = 0;
                foreach ($this->notApplicableServer as $item) {
                    $res['notApplicableServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notApplicableServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['notApplicableServer'])) {
            if (!empty($map['notApplicableServer'])) {
                $model->notApplicableServer = [];
                $n                          = 0;
                foreach ($map['notApplicableServer'] as $item) {
                    $model->notApplicableServer[$n++] = null !== $item ? notApplicableServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
