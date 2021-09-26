<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\accessInfo\ZKLinks;

use AlibabaCloud\Tea\Model;

class ZKLink extends Model
{
    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $link;
    protected $_name = [
        'port' => 'Port',
        'link' => 'Link',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ZKLink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }

        return $model;
    }
}
