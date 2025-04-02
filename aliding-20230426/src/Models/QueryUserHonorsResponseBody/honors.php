<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody\honors\grantHistory;

class honors extends Model
{
    /**
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
     * @var string
     */
    public $honorId;

    /**
     * @var string
     */
    public $honorName;
    protected $_name = [
        'expirationTime' => 'expirationTime',
        'grantHistory' => 'grantHistory',
        'honorDesc' => 'honorDesc',
        'honorId' => 'honorId',
        'honorName' => 'honorName',
    ];

    public function validate()
    {
        if (\is_array($this->grantHistory)) {
            Model::validateArray($this->grantHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }

        if (null !== $this->grantHistory) {
            if (\is_array($this->grantHistory)) {
                $res['grantHistory'] = [];
                $n1 = 0;
                foreach ($this->grantHistory as $item1) {
                    $res['grantHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        if (isset($map['grantHistory'])) {
            if (!empty($map['grantHistory'])) {
                $model->grantHistory = [];
                $n1 = 0;
                foreach ($map['grantHistory'] as $item1) {
                    $model->grantHistory[$n1++] = grantHistory::fromMap($item1);
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
