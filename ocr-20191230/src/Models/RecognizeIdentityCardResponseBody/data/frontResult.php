<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\cardAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectVertices;

class frontResult extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
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
        'address' => 'Address',
        'birthDate' => 'BirthDate',
        'cardAreas' => 'CardAreas',
        'faceRectVertices' => 'FaceRectVertices',
        'faceRectangle' => 'FaceRectangle',
        'gender' => 'Gender',
        'IDNumber' => 'IDNumber',
        'name' => 'Name',
        'nationality' => 'Nationality',
    ];

    public function validate()
    {
        if (\is_array($this->cardAreas)) {
            Model::validateArray($this->cardAreas);
        }
        if (\is_array($this->faceRectVertices)) {
            Model::validateArray($this->faceRectVertices);
        }
        if (null !== $this->faceRectangle) {
            $this->faceRectangle->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }

        if (null !== $this->cardAreas) {
            if (\is_array($this->cardAreas)) {
                $res['CardAreas'] = [];
                $n1 = 0;
                foreach ($this->cardAreas as $item1) {
                    $res['CardAreas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->faceRectVertices) {
            if (\is_array($this->faceRectVertices)) {
                $res['FaceRectVertices'] = [];
                $n1 = 0;
                foreach ($this->faceRectVertices as $item1) {
                    $res['FaceRectVertices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->faceRectangle) {
            $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toArray($noStream) : $this->faceRectangle;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['CardAreas'] as $item1) {
                    $model->cardAreas[$n1] = cardAreas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FaceRectVertices'])) {
            if (!empty($map['FaceRectVertices'])) {
                $model->faceRectVertices = [];
                $n1 = 0;
                foreach ($map['FaceRectVertices'] as $item1) {
                    $model->faceRectVertices[$n1] = faceRectVertices::fromMap($item1);
                    ++$n1;
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
