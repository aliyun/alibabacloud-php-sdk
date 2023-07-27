<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListAccessPointsResult extends Model
{
    /**
     * @var AccessPoint[]
     */
    public $accessPoints;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $nextContinuationToken;
    protected $_name = [
        'accessPoints'          => 'AccessPoints',
        'accountId'             => 'AccountId',
        'isTruncated'           => 'IsTruncated',
        'nextContinuationToken' => 'NextContinuationToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPoints) {
            $res['AccessPoints'] = [];
            if (null !== $this->accessPoints && \is_array($this->accessPoints)) {
                $n = 0;
                foreach ($this->accessPoints as $item) {
                    $res['AccessPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->nextContinuationToken) {
            $res['NextContinuationToken'] = $this->nextContinuationToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessPointsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPoints'])) {
            if (!empty($map['AccessPoints'])) {
                $model->accessPoints = [];
                $n                   = 0;
                foreach ($map['AccessPoints'] as $item) {
                    $model->accessPoints[$n++] = null !== $item ? AccessPoint::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['NextContinuationToken'])) {
            $model->nextContinuationToken = $map['NextContinuationToken'];
        }

        return $model;
    }
}
