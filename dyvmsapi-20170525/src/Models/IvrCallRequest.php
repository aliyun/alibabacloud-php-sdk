<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest\menuKeyMap;
use AlibabaCloud\Tea\Model;

class IvrCallRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $calledShowNumber;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $startCode;

    /**
     * @var string
     */
    public $startTtsParams;

    /**
     * @var int
     */
    public $playTimes;

    /**
     * @var string
     */
    public $byeCode;

    /**
     * @var string
     */
    public $byeTtsParams;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var menuKeyMap[]
     */
    public $menuKeyMap;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'calledShowNumber'     => 'CalledShowNumber',
        'calledNumber'         => 'CalledNumber',
        'startCode'            => 'StartCode',
        'startTtsParams'       => 'StartTtsParams',
        'playTimes'            => 'PlayTimes',
        'byeCode'              => 'ByeCode',
        'byeTtsParams'         => 'ByeTtsParams',
        'timeout'              => 'Timeout',
        'outId'                => 'OutId',
        'menuKeyMap'           => 'MenuKeyMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->startCode) {
            $res['StartCode'] = $this->startCode;
        }
        if (null !== $this->startTtsParams) {
            $res['StartTtsParams'] = $this->startTtsParams;
        }
        if (null !== $this->playTimes) {
            $res['PlayTimes'] = $this->playTimes;
        }
        if (null !== $this->byeCode) {
            $res['ByeCode'] = $this->byeCode;
        }
        if (null !== $this->byeTtsParams) {
            $res['ByeTtsParams'] = $this->byeTtsParams;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->menuKeyMap) {
            $res['MenuKeyMap'] = [];
            if (null !== $this->menuKeyMap && \is_array($this->menuKeyMap)) {
                $n = 0;
                foreach ($this->menuKeyMap as $item) {
                    $res['MenuKeyMap'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IvrCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['StartCode'])) {
            $model->startCode = $map['StartCode'];
        }
        if (isset($map['StartTtsParams'])) {
            $model->startTtsParams = $map['StartTtsParams'];
        }
        if (isset($map['PlayTimes'])) {
            $model->playTimes = $map['PlayTimes'];
        }
        if (isset($map['ByeCode'])) {
            $model->byeCode = $map['ByeCode'];
        }
        if (isset($map['ByeTtsParams'])) {
            $model->byeTtsParams = $map['ByeTtsParams'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['MenuKeyMap'])) {
            if (!empty($map['MenuKeyMap'])) {
                $model->menuKeyMap = [];
                $n                 = 0;
                foreach ($map['MenuKeyMap'] as $item) {
                    $model->menuKeyMap[$n++] = null !== $item ? menuKeyMap::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
