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
     * @var faceRectangle
     */
    public $faceRectangle;

    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $address;

    /**
     * @var faceRectVertices[]
     */
    public $faceRectVertices;

    /**
     * @var cardAreas[]
     */
    public $cardAreas;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $IDNumber;
    protected $_name = [
        'faceRectangle'    => 'FaceRectangle',
        'birthDate'        => 'BirthDate',
        'gender'           => 'Gender',
        'address'          => 'Address',
        'faceRectVertices' => 'FaceRectVertices',
        'cardAreas'        => 'CardAreas',
        'nationality'      => 'Nationality',
        'name'             => 'Name',
        'IDNumber'         => 'IDNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRectangle) {
            $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toMap() : null;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
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
        if (null !== $this->cardAreas) {
            $res['CardAreas'] = [];
            if (null !== $this->cardAreas && \is_array($this->cardAreas)) {
                $n = 0;
                foreach ($this->cardAreas as $item) {
                    $res['CardAreas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->IDNumber) {
            $res['IDNumber'] = $this->IDNumber;
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
        if (isset($map['FaceRectangle'])) {
            $model->faceRectangle = faceRectangle::fromMap($map['FaceRectangle']);
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
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
        if (isset($map['CardAreas'])) {
            if (!empty($map['CardAreas'])) {
                $model->cardAreas = [];
                $n                = 0;
                foreach ($map['CardAreas'] as $item) {
                    $model->cardAreas[$n++] = null !== $item ? cardAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IDNumber'])) {
            $model->IDNumber = $map['IDNumber'];
        }

        return $model;
    }
}
