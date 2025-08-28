<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest\menuKeyMap;

class IvrCallRequest extends Model
{
    /**
     * @var string
     */
    public $byeCode;

    /**
     * @var string
     */
    public $byeTtsParams;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $calledShowNumber;

    /**
     * @var menuKeyMap[]
     */
    public $menuKeyMap;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $playTimes;

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
    public $startCode;

    /**
     * @var string
     */
    public $startTtsParams;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'byeCode' => 'ByeCode',
        'byeTtsParams' => 'ByeTtsParams',
        'calledNumber' => 'CalledNumber',
        'calledShowNumber' => 'CalledShowNumber',
        'menuKeyMap' => 'MenuKeyMap',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'playTimes' => 'PlayTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startCode' => 'StartCode',
        'startTtsParams' => 'StartTtsParams',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->menuKeyMap)) {
            Model::validateArray($this->menuKeyMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byeCode) {
            $res['ByeCode'] = $this->byeCode;
        }

        if (null !== $this->byeTtsParams) {
            $res['ByeTtsParams'] = $this->byeTtsParams;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }

        if (null !== $this->menuKeyMap) {
            if (\is_array($this->menuKeyMap)) {
                $res['MenuKeyMap'] = [];
                $n1 = 0;
                foreach ($this->menuKeyMap as $item1) {
                    $res['MenuKeyMap'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->playTimes) {
            $res['PlayTimes'] = $this->playTimes;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startCode) {
            $res['StartCode'] = $this->startCode;
        }

        if (null !== $this->startTtsParams) {
            $res['StartTtsParams'] = $this->startTtsParams;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['ByeCode'])) {
            $model->byeCode = $map['ByeCode'];
        }

        if (isset($map['ByeTtsParams'])) {
            $model->byeTtsParams = $map['ByeTtsParams'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }

        if (isset($map['MenuKeyMap'])) {
            if (!empty($map['MenuKeyMap'])) {
                $model->menuKeyMap = [];
                $n1 = 0;
                foreach ($map['MenuKeyMap'] as $item1) {
                    $model->menuKeyMap[$n1] = menuKeyMap::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlayTimes'])) {
            $model->playTimes = $map['PlayTimes'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartCode'])) {
            $model->startCode = $map['StartCode'];
        }

        if (isset($map['StartTtsParams'])) {
            $model->startTtsParams = $map['StartTtsParams'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
