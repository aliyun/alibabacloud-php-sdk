<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\cardAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectVertices;
use AlibabaCloud\Tea\Model;

class frontResult extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @example 19960111
     *
     * @var string
     */
    public $birthDate;

    /**
     * @var cardAreas[]
     */
    public $cardAreas;

    /**
     * @var faceRectVertices[]
     */
    public $faceRectVertices;

    /**
     * @var faceRectangle
     */
    public $faceRectangle;

    /**
     * @var string
     */
    public $gender;

    /**
     * @example 310228199601115411
     *
     * @var string
     */
    public $IDNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nationality;
    protected $_name = [
        'address'          => 'Address',
        'birthDate'        => 'BirthDate',
        'cardAreas'        => 'CardAreas',
        'faceRectVertices' => 'FaceRectVertices',
        'faceRectangle'    => 'FaceRectangle',
        'gender'           => 'Gender',
        'IDNumber'         => 'IDNumber',
        'name'             => 'Name',
        'nationality'      => 'Nationality',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }
        if (null !== $this->cardAreas) {
            $res['CardAreas'] = [];
            if (null !== $this->cardAreas && \is_array($this->cardAreas)) {
                $n = 0;
                foreach ($this->cardAreas as $item) {
                    $res['CardAreas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->faceRectVertices) {
            $res['FaceRectVertices'] = [];
            if (null !== $this->faceRectVertices && \is_array($this->faceRectVertices)) {
                $n = 0;
                foreach ($this->faceRectVertices as $item) {
                    $res['FaceRectVertices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->faceRectangle) {
            $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toMap() : null;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->IDNumber) {
            $res['IDNumber'] = $this->IDNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frontResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['CardAreas'])) {
            if (!empty($map['CardAreas'])) {
                $model->cardAreas = [];
                $n                = 0;
                foreach ($map['CardAreas'] as $item) {
                    $model->cardAreas[$n++] = null !== $item ? cardAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceRectVertices'])) {
            if (!empty($map['FaceRectVertices'])) {
                $model->faceRectVertices = [];
                $n                       = 0;
                foreach ($map['FaceRectVertices'] as $item) {
                    $model->faceRectVertices[$n++] = null !== $item ? faceRectVertices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceRectangle'])) {
            $model->faceRectangle = faceRectangle::fromMap($map['FaceRectangle']);
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['IDNumber'])) {
            $model->IDNumber = $map['IDNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }

        return $model;
    }
}
