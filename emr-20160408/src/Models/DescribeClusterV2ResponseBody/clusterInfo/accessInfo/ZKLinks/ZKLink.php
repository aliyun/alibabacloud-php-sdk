<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\accessInfo\ZKLinks;

use AlibabaCloud\Tea\Model;

class ZKLink extends Model
{
    /**
     * @example emr-worker-1,emr-header-2,emr-header-1
     *
     * @var string
     */
    public $link;

    /**
     * @example 2181
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'link' => 'Link',
        'port' => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
