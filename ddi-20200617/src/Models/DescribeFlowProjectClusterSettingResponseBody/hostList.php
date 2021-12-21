<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectClusterSettingResponseBody;

use AlibabaCloud\Tea\Model;

class hostList extends Model
{
    /**
     * @var string[]
     */
    public $host;
    protected $_name = [
        'host' => 'Host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            if (!empty($map['Host'])) {
                $model->host = $map['Host'];
            }
        }

        return $model;
    }
}
