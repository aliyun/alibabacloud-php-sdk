<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody\honors\grantHistory;
use AlibabaCloud\Tea\Model;

class honors extends Model
{
    /**
     * @example null
     *
     * @var int
     */
    public $expirationTime;

    /**
     * @var grantHistory[]
     */
    public $grantHistory;

    /**
     * @var string
     */
    public $honorDesc;

    /**
     * @example 21659398
     *
     * @var string
     */
    public $honorId;

    /**
     * @var string
     */
    public $honorName;
    protected $_name = [
        'expirationTime' => 'expirationTime',
        'grantHistory'   => 'grantHistory',
        'honorDesc'      => 'honorDesc',
        'honorId'        => 'honorId',
        'honorName'      => 'honorName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }
        if (null !== $this->grantHistory) {
            $res['grantHistory'] = [];
            if (null !== $this->grantHistory && \is_array($this->grantHistory)) {
                $n = 0;
                foreach ($this->grantHistory as $item) {
                    $res['grantHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->honorDesc) {
            $res['honorDesc'] = $this->honorDesc;
        }
        if (null !== $this->honorId) {
            $res['honorId'] = $this->honorId;
        }
        if (null !== $this->honorName) {
            $res['honorName'] = $this->honorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }
        if (isset($map['grantHistory'])) {
            if (!empty($map['grantHistory'])) {
                $model->grantHistory = [];
                $n                   = 0;
                foreach ($map['grantHistory'] as $item) {
                    $model->grantHistory[$n++] = null !== $item ? grantHistory::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['honorDesc'])) {
            $model->honorDesc = $map['honorDesc'];
        }
        if (isset($map['honorId'])) {
            $model->honorId = $map['honorId'];
        }
        if (isset($map['honorName'])) {
            $model->honorName = $map['honorName'];
        }

        return $model;
    }
}
