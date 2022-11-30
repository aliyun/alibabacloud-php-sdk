<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitNumberRequest\numberList;
use AlibabaCloud\Tea\Model;

class SubmitNumberRequest extends Model
{
    /**
     * @var string
     */
    public $applyNote;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var numberList[]
     */
    public $numberList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $qualificationId;

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
    public $scene;
    protected $_name = [
        'applyNote'            => 'ApplyNote',
        'countryId'            => 'CountryId',
        'numberList'           => 'NumberList',
        'ownerId'              => 'OwnerId',
        'qualificationId'      => 'QualificationId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scene'                => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyNote) {
            $res['ApplyNote'] = $this->applyNote;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = [];
            if (null !== $this->numberList && \is_array($this->numberList)) {
                $n = 0;
                foreach ($this->numberList as $item) {
                    $res['NumberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyNote'])) {
            $model->applyNote = $map['ApplyNote'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['NumberList'])) {
            if (!empty($map['NumberList'])) {
                $model->numberList = [];
                $n                 = 0;
                foreach ($map['NumberList'] as $item) {
                    $model->numberList[$n++] = null !== $item ? numberList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
