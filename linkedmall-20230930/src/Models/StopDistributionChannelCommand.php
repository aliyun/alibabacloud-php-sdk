<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class StopDistributionChannelCommand extends Model
{
    /**
     * @var string[]
     */
    public $channelCodes;

    /**
     * @var string
     */
    public $lmShopId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $requestUser;
    protected $_name = [
        'channelCodes' => 'channelCodes',
        'lmShopId' => 'lmShopId',
        'productId' => 'productId',
        'requestId' => 'requestId',
        'requestTime' => 'requestTime',
        'requestUser' => 'requestUser',
    ];

    public function validate()
    {
        if (\is_array($this->channelCodes)) {
            Model::validateArray($this->channelCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelCodes) {
            if (\is_array($this->channelCodes)) {
                $res['channelCodes'] = [];
                $n1 = 0;
                foreach ($this->channelCodes as $item1) {
                    $res['channelCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lmShopId) {
            $res['lmShopId'] = $this->lmShopId;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
        }

        if (null !== $this->requestUser) {
            $res['requestUser'] = $this->requestUser;
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
        if (isset($map['channelCodes'])) {
            if (!empty($map['channelCodes'])) {
                $model->channelCodes = [];
                $n1 = 0;
                foreach ($map['channelCodes'] as $item1) {
                    $model->channelCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['lmShopId'])) {
            $model->lmShopId = $map['lmShopId'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
        }

        if (isset($map['requestUser'])) {
            $model->requestUser = $map['requestUser'];
        }

        return $model;
    }
}
