<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\accessInfo\ZKLinks;
use AlibabaCloud\Tea\Model;

class accessInfo extends Model
{
    /**
     * @var ZKLinks
     */
    public $ZKLinks;
    protected $_name = [
        'ZKLinks' => 'ZKLinks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ZKLinks) {
            $res['ZKLinks'] = null !== $this->ZKLinks ? $this->ZKLinks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZKLinks'])) {
            $model->ZKLinks = ZKLinks::fromMap($map['ZKLinks']);
        }

        return $model;
    }
}
