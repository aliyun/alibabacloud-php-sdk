<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels;

use AlibabaCloud\Dara\Model;

class pictures extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $firstCategoryCode;

    /**
     * @var string
     */
    public $firstCategoryName;

    /**
     * @var bool
     */
    public $isHeadPic;

    /**
     * @var string
     */
    public $pictureId;

    /**
     * @var string
     */
    public $secondCategoryCode;

    /**
     * @var string
     */
    public $secondCategoryName;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'description' => 'Description',
        'firstCategoryCode' => 'FirstCategoryCode',
        'firstCategoryName' => 'FirstCategoryName',
        'isHeadPic' => 'IsHeadPic',
        'pictureId' => 'PictureId',
        'secondCategoryCode' => 'SecondCategoryCode',
        'secondCategoryName' => 'SecondCategoryName',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->firstCategoryCode) {
            $res['FirstCategoryCode'] = $this->firstCategoryCode;
        }

        if (null !== $this->firstCategoryName) {
            $res['FirstCategoryName'] = $this->firstCategoryName;
        }

        if (null !== $this->isHeadPic) {
            $res['IsHeadPic'] = $this->isHeadPic;
        }

        if (null !== $this->pictureId) {
            $res['PictureId'] = $this->pictureId;
        }

        if (null !== $this->secondCategoryCode) {
            $res['SecondCategoryCode'] = $this->secondCategoryCode;
        }

        if (null !== $this->secondCategoryName) {
            $res['SecondCategoryName'] = $this->secondCategoryName;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FirstCategoryCode'])) {
            $model->firstCategoryCode = $map['FirstCategoryCode'];
        }

        if (isset($map['FirstCategoryName'])) {
            $model->firstCategoryName = $map['FirstCategoryName'];
        }

        if (isset($map['IsHeadPic'])) {
            $model->isHeadPic = $map['IsHeadPic'];
        }

        if (isset($map['PictureId'])) {
            $model->pictureId = $map['PictureId'];
        }

        if (isset($map['SecondCategoryCode'])) {
            $model->secondCategoryCode = $map['SecondCategoryCode'];
        }

        if (isset($map['SecondCategoryName'])) {
            $model->secondCategoryName = $map['SecondCategoryName'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
