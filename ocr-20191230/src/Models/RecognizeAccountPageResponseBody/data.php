<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponseBody\data\invalidStampAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponseBody\data\otherStampAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponseBody\data\registerStampAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponseBody\data\titleArea;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponseBody\data\undertakeStampAreas;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $angle;

    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $birthPlace;

    /**
     * @var string
     */
    public $gender;

    /**
     * @example 513437200212271325
     *
     * @var string
     */
    public $IDNumber;

    /**
     * @var invalidStampAreas[]
     */
    public $invalidStampAreas;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $nativePlace;

    /**
     * @var otherStampAreas[]
     */
    public $otherStampAreas;

    /**
     * @var registerStampAreas[]
     */
    public $registerStampAreas;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var titleArea
     */
    public $titleArea;

    /**
     * @var undertakeStampAreas[]
     */
    public $undertakeStampAreas;
    protected $_name = [
        'angle'               => 'Angle',
        'birthDate'           => 'BirthDate',
        'birthPlace'          => 'BirthPlace',
        'gender'              => 'Gender',
        'IDNumber'            => 'IDNumber',
        'invalidStampAreas'   => 'InvalidStampAreas',
        'name'                => 'Name',
        'nationality'         => 'Nationality',
        'nativePlace'         => 'NativePlace',
        'otherStampAreas'     => 'OtherStampAreas',
        'registerStampAreas'  => 'RegisterStampAreas',
        'relation'            => 'Relation',
        'titleArea'           => 'TitleArea',
        'undertakeStampAreas' => 'UndertakeStampAreas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }
        if (null !== $this->birthPlace) {
            $res['BirthPlace'] = $this->birthPlace;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->IDNumber) {
            $res['IDNumber'] = $this->IDNumber;
        }
        if (null !== $this->invalidStampAreas) {
            $res['InvalidStampAreas'] = [];
            if (null !== $this->invalidStampAreas && \is_array($this->invalidStampAreas)) {
                $n = 0;
                foreach ($this->invalidStampAreas as $item) {
                    $res['InvalidStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->nativePlace) {
            $res['NativePlace'] = $this->nativePlace;
        }
        if (null !== $this->otherStampAreas) {
            $res['OtherStampAreas'] = [];
            if (null !== $this->otherStampAreas && \is_array($this->otherStampAreas)) {
                $n = 0;
                foreach ($this->otherStampAreas as $item) {
                    $res['OtherStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->registerStampAreas) {
            $res['RegisterStampAreas'] = [];
            if (null !== $this->registerStampAreas && \is_array($this->registerStampAreas)) {
                $n = 0;
                foreach ($this->registerStampAreas as $item) {
                    $res['RegisterStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }
        if (null !== $this->titleArea) {
            $res['TitleArea'] = null !== $this->titleArea ? $this->titleArea->toMap() : null;
        }
        if (null !== $this->undertakeStampAreas) {
            $res['UndertakeStampAreas'] = [];
            if (null !== $this->undertakeStampAreas && \is_array($this->undertakeStampAreas)) {
                $n = 0;
                foreach ($this->undertakeStampAreas as $item) {
                    $res['UndertakeStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['BirthPlace'])) {
            $model->birthPlace = $map['BirthPlace'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['IDNumber'])) {
            $model->IDNumber = $map['IDNumber'];
        }
        if (isset($map['InvalidStampAreas'])) {
            if (!empty($map['InvalidStampAreas'])) {
                $model->invalidStampAreas = [];
                $n                        = 0;
                foreach ($map['InvalidStampAreas'] as $item) {
                    $model->invalidStampAreas[$n++] = null !== $item ? invalidStampAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['NativePlace'])) {
            $model->nativePlace = $map['NativePlace'];
        }
        if (isset($map['OtherStampAreas'])) {
            if (!empty($map['OtherStampAreas'])) {
                $model->otherStampAreas = [];
                $n                      = 0;
                foreach ($map['OtherStampAreas'] as $item) {
                    $model->otherStampAreas[$n++] = null !== $item ? otherStampAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegisterStampAreas'])) {
            if (!empty($map['RegisterStampAreas'])) {
                $model->registerStampAreas = [];
                $n                         = 0;
                foreach ($map['RegisterStampAreas'] as $item) {
                    $model->registerStampAreas[$n++] = null !== $item ? registerStampAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }
        if (isset($map['TitleArea'])) {
            $model->titleArea = titleArea::fromMap($map['TitleArea']);
        }
        if (isset($map['UndertakeStampAreas'])) {
            if (!empty($map['UndertakeStampAreas'])) {
                $model->undertakeStampAreas = [];
                $n                          = 0;
                foreach ($map['UndertakeStampAreas'] as $item) {
                    $model->undertakeStampAreas[$n++] = null !== $item ? undertakeStampAreas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
