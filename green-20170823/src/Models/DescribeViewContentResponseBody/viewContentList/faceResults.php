<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\age;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\bang;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\gender;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\glasses;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\hairstyle;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\hat;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\image;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\location;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\mustache;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\quality;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\respirator;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList\faceResults\smile;
use AlibabaCloud\Tea\Model;

class faceResults extends Model
{
    /**
     * @var age
     */
    public $age;

    /**
     * @var bang
     */
    public $bang;

    /**
     * @var bool
     */
    public $bualified;

    /**
     * @var gender
     */
    public $gender;

    /**
     * @var glasses
     */
    public $glasses;

    /**
     * @var hairstyle
     */
    public $hairstyle;

    /**
     * @var hat
     */
    public $hat;

    /**
     * @var image
     */
    public $image;

    /**
     * @var location
     */
    public $location;

    /**
     * @var mustache
     */
    public $mustache;

    /**
     * @var quality
     */
    public $quality;

    /**
     * @var respirator
     */
    public $respirator;

    /**
     * @var smile
     */
    public $smile;
    protected $_name = [
        'age'        => 'Age',
        'bang'       => 'Bang',
        'bualified'  => 'Bualified',
        'gender'     => 'Gender',
        'glasses'    => 'Glasses',
        'hairstyle'  => 'Hairstyle',
        'hat'        => 'Hat',
        'image'      => 'Image',
        'location'   => 'Location',
        'mustache'   => 'Mustache',
        'quality'    => 'Quality',
        'respirator' => 'Respirator',
        'smile'      => 'Smile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = null !== $this->age ? $this->age->toMap() : null;
        }
        if (null !== $this->bang) {
            $res['Bang'] = null !== $this->bang ? $this->bang->toMap() : null;
        }
        if (null !== $this->bualified) {
            $res['Bualified'] = $this->bualified;
        }
        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toMap() : null;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = null !== $this->glasses ? $this->glasses->toMap() : null;
        }
        if (null !== $this->hairstyle) {
            $res['Hairstyle'] = null !== $this->hairstyle ? $this->hairstyle->toMap() : null;
        }
        if (null !== $this->hat) {
            $res['Hat'] = null !== $this->hat ? $this->hat->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->mustache) {
            $res['Mustache'] = null !== $this->mustache ? $this->mustache->toMap() : null;
        }
        if (null !== $this->quality) {
            $res['Quality'] = null !== $this->quality ? $this->quality->toMap() : null;
        }
        if (null !== $this->respirator) {
            $res['Respirator'] = null !== $this->respirator ? $this->respirator->toMap() : null;
        }
        if (null !== $this->smile) {
            $res['Smile'] = null !== $this->smile ? $this->smile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Age'])) {
            $model->age = age::fromMap($map['Age']);
        }
        if (isset($map['Bang'])) {
            $model->bang = bang::fromMap($map['Bang']);
        }
        if (isset($map['Bualified'])) {
            $model->bualified = $map['Bualified'];
        }
        if (isset($map['Gender'])) {
            $model->gender = gender::fromMap($map['Gender']);
        }
        if (isset($map['Glasses'])) {
            $model->glasses = glasses::fromMap($map['Glasses']);
        }
        if (isset($map['Hairstyle'])) {
            $model->hairstyle = hairstyle::fromMap($map['Hairstyle']);
        }
        if (isset($map['Hat'])) {
            $model->hat = hat::fromMap($map['Hat']);
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['Mustache'])) {
            $model->mustache = mustache::fromMap($map['Mustache']);
        }
        if (isset($map['Quality'])) {
            $model->quality = quality::fromMap($map['Quality']);
        }
        if (isset($map['Respirator'])) {
            $model->respirator = respirator::fromMap($map['Respirator']);
        }
        if (isset($map['Smile'])) {
            $model->smile = smile::fromMap($map['Smile']);
        }

        return $model;
    }
}
