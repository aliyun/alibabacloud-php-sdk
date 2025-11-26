<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponseBody\data\serverList;

class data extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var serverList[]
     */
    public $serverList;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'serverList' => 'ServerList',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->serverList)) {
            Model::validateArray($this->serverList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->serverList) {
            if (\is_array($this->serverList)) {
                $res['ServerList'] = [];
                $n1 = 0;
                foreach ($this->serverList as $item1) {
                    $res['ServerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ServerList'])) {
            if (!empty($map['ServerList'])) {
                $model->serverList = [];
                $n1 = 0;
                foreach ($map['ServerList'] as $item1) {
                    $model->serverList[$n1] = serverList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
