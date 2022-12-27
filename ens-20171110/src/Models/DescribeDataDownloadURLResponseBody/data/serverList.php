<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponseBody\data;

use AlibabaCloud\Tea\Model;

class serverList extends Model
{
    /**
     * @example 1.1.1.1:8080
     *
     * @var string
     */
    public $host;

    /**
     * @example cn-chenzhou-5
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'host'     => 'Host',
        'regionId' => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
