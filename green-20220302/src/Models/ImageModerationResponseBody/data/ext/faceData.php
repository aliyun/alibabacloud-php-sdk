<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\bang;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\gender;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\hairstyle;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\hat;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\location;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\mask;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\mustache;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData\quality;
use AlibabaCloud\Tea\Model;

class faceData extends Model
{
    /**
     * @description The age recognition result.
     *
     * @example 18
     *
     * @var int
     */
    public $age;

    /**
     * @description Indicates whether the recognition result of bangs is available.
     *
     * @var bang
     */
    public $bang;

    /**
     * @description The gender recognition result.
     *
     * @var gender
     */
    public $gender;

    /**
     * @description The recognition result of whether to wear glasses.
     *
     * - None: No glasses.
     *
     * - Wear: Wear glasses.
     *
     * - Sunglass: Wear sunglasses.
     *
     * @example Common
     *
     * @var string
     */
    public $glasses;

    /**
     * @description The hairstyle recognition result.
     *
     * @var hairstyle
     */
    public $hairstyle;

    /**
     * @description The recognition result of whether to wear a hat.
     *
     * @var hat
     */
    public $hat;

    /**
     * @description The location of the face.
     *
     * @var location
     */
    public $location;

    /**
     * @description The recognition result of whether to wear a mask.
     *
     * @var mask
     */
    public $mask;

    /**
     * @description The identification result of whether there is a beard.
     *
     * @var mustache
     */
    public $mustache;

    /**
     * @description The quality information of the face image.
     *
     * @var quality
     */
    public $quality;

    /**
     * @description The smiling degree of the face.
     *
     * @example 85.88
     *
     * @var float
     */
    public $smile;
    protected $_name = [
        'age' => 'Age',
        'bang' => 'Bang',
        'gender' => 'Gender',
        'glasses' => 'Glasses',
        'hairstyle' => 'Hairstyle',
        'hat' => 'Hat',
        'location' => 'Location',
        'mask' => 'Mask',
        'mustache' => 'Mustache',
        'quality' => 'Quality',
        'smile' => 'Smile',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->bang) {
            $res['Bang'] = null !== $this->bang ? $this->bang->toMap() : null;
        }
        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toMap() : null;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->hairstyle) {
            $res['Hairstyle'] = null !== $this->hairstyle ? $this->hairstyle->toMap() : null;
        }
        if (null !== $this->hat) {
            $res['Hat'] = null !== $this->hat ? $this->hat->toMap() : null;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->mask) {
            $res['Mask'] = null !== $this->mask ? $this->mask->toMap() : null;
        }
        if (null !== $this->mustache) {
            $res['Mustache'] = null !== $this->mustache ? $this->mustache->toMap() : null;
        }
        if (null !== $this->quality) {
            $res['Quality'] = null !== $this->quality ? $this->quality->toMap() : null;
        }
        if (null !== $this->smile) {
            $res['Smile'] = $this->smile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Bang'])) {
            $model->bang = bang::fromMap($map['Bang']);
        }
        if (isset($map['Gender'])) {
            $model->gender = gender::fromMap($map['Gender']);
        }
        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }
        if (isset($map['Hairstyle'])) {
            $model->hairstyle = hairstyle::fromMap($map['Hairstyle']);
        }
        if (isset($map['Hat'])) {
            $model->hat = hat::fromMap($map['Hat']);
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['Mask'])) {
            $model->mask = mask::fromMap($map['Mask']);
        }
        if (isset($map['Mustache'])) {
            $model->mustache = mustache::fromMap($map['Mustache']);
        }
        if (isset($map['Quality'])) {
            $model->quality = quality::fromMap($map['Quality']);
        }
        if (isset($map['Smile'])) {
            $model->smile = $map['Smile'];
        }

        return $model;
    }
}
