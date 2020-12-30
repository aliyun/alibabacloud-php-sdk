<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer;
use AlibabaCloud\Tea\Model;

class sourceServers extends Model
{
    /**
     * @var sourceServer[]
     */
    public $sourceServer;
    protected $_name = [
        'sourceServer' => 'SourceServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceServer) {
            $res['SourceServer'] = [];
            if (null !== $this->sourceServer && \is_array($this->sourceServer)) {
                $n = 0;
                foreach ($this->sourceServer as $item) {
                    $res['SourceServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceServer'])) {
            if (!empty($map['SourceServer'])) {
                $model->sourceServer = [];
                $n                   = 0;
                foreach ($map['SourceServer'] as $item) {
                    $model->sourceServer[$n++] = null !== $item ? sourceServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
