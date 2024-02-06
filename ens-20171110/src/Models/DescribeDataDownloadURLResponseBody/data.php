<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponseBody\data\serverList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the data file expires. The time is displayed in UTC.
     *
     * @example 2021-12-10T03:36:27Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The file servers.
     *
     * @var serverList[]
     */
    public $serverList;

    /**
     * @description The download URL of the data file.
     *
     * @example /file/1450088842124331/97a32f2a-aa2c-436a-b19c-05b20d258618/f0313053530fc727f81b7d03fad93cd2/e4c2e8edac362acab7123654b9e73432?ak=edgepaas-innerapi-daily&ts=1611229454&sign=Yycbax%2F4OsTgm6BLoxR6lPs5gKE%3D
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'serverList' => 'ServerList',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->serverList) {
            $res['ServerList'] = [];
            if (null !== $this->serverList && \is_array($this->serverList)) {
                $n = 0;
                foreach ($this->serverList as $item) {
                    $res['ServerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ServerList'])) {
            if (!empty($map['ServerList'])) {
                $model->serverList = [];
                $n                 = 0;
                foreach ($map['ServerList'] as $item) {
                    $model->serverList[$n++] = null !== $item ? serverList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
