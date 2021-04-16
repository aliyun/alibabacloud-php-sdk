<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $profession;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $hotSpotAddress;

    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $personType;

    /**
     * @var string
     */
    public $transportation;
    protected $_name = [
        'sourceUrl'      => 'SourceUrl',
        'profession'     => 'Profession',
        'updateTime'     => 'UpdateTime',
        'gender'         => 'Gender',
        'targetUrl'      => 'TargetUrl',
        'address'        => 'Address',
        'hotSpotAddress' => 'HotSpotAddress',
        'age'            => 'Age',
        'personId'       => 'PersonId',
        'personType'     => 'PersonType',
        'transportation' => 'Transportation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->profession) {
            $res['Profession'] = $this->profession;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->hotSpotAddress) {
            $res['HotSpotAddress'] = $this->hotSpotAddress;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->personType) {
            $res['PersonType'] = $this->personType;
        }
        if (null !== $this->transportation) {
            $res['Transportation'] = $this->transportation;
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
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['Profession'])) {
            $model->profession = $map['Profession'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['HotSpotAddress'])) {
            $model->hotSpotAddress = $map['HotSpotAddress'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PersonType'])) {
            $model->personType = $map['PersonType'];
        }
        if (isset($map['Transportation'])) {
            $model->transportation = $map['Transportation'];
        }

        return $model;
    }
}
