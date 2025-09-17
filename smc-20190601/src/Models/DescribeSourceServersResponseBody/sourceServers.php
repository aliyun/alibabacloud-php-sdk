<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer;

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
        if (\is_array($this->sourceServer)) {
            Model::validateArray($this->sourceServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceServer) {
            if (\is_array($this->sourceServer)) {
                $res['SourceServer'] = [];
                $n1 = 0;
                foreach ($this->sourceServer as $item1) {
                    $res['SourceServer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SourceServer'])) {
            if (!empty($map['SourceServer'])) {
                $model->sourceServer = [];
                $n1 = 0;
                foreach ($map['SourceServer'] as $item1) {
                    $model->sourceServer[$n1] = sourceServer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
