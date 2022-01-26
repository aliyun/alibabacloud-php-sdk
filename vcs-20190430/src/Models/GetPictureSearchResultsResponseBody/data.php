<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models\GetPictureSearchResultsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $leftUpperCornerXCoordinate;

    /**
     * @var string
     */
    public $leftUpperCornerYCoordinate;

    /**
     * @var string
     */
    public $locationMarkTime;

    /**
     * @var string
     */
    public $pictureId1;

    /**
     * @var string
     */
    public $pictureId2;

    /**
     * @var string
     */
    public $pictureUrl1;

    /**
     * @var string
     */
    public $pictureUrl2;

    /**
     * @var string
     */
    public $rightLowerCornerXCoordinate;

    /**
     * @var string
     */
    public $rightLowerCornerYCoordinate;

    /**
     * @var float
     */
    public $similarity;
    protected $_name = [
        'deviceId'                    => 'DeviceId',
        'leftUpperCornerXCoordinate'  => 'LeftUpperCornerXCoordinate',
        'leftUpperCornerYCoordinate'  => 'LeftUpperCornerYCoordinate',
        'locationMarkTime'            => 'LocationMarkTime',
        'pictureId1'                  => 'PictureId1',
        'pictureId2'                  => 'PictureId2',
        'pictureUrl1'                 => 'PictureUrl1',
        'pictureUrl2'                 => 'PictureUrl2',
        'rightLowerCornerXCoordinate' => 'RightLowerCornerXCoordinate',
        'rightLowerCornerYCoordinate' => 'RightLowerCornerYCoordinate',
        'similarity'                  => 'Similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->leftUpperCornerXCoordinate) {
            $res['LeftUpperCornerXCoordinate'] = $this->leftUpperCornerXCoordinate;
        }
        if (null !== $this->leftUpperCornerYCoordinate) {
            $res['LeftUpperCornerYCoordinate'] = $this->leftUpperCornerYCoordinate;
        }
        if (null !== $this->locationMarkTime) {
            $res['LocationMarkTime'] = $this->locationMarkTime;
        }
        if (null !== $this->pictureId1) {
            $res['PictureId1'] = $this->pictureId1;
        }
        if (null !== $this->pictureId2) {
            $res['PictureId2'] = $this->pictureId2;
        }
        if (null !== $this->pictureUrl1) {
            $res['PictureUrl1'] = $this->pictureUrl1;
        }
        if (null !== $this->pictureUrl2) {
            $res['PictureUrl2'] = $this->pictureUrl2;
        }
        if (null !== $this->rightLowerCornerXCoordinate) {
            $res['RightLowerCornerXCoordinate'] = $this->rightLowerCornerXCoordinate;
        }
        if (null !== $this->rightLowerCornerYCoordinate) {
            $res['RightLowerCornerYCoordinate'] = $this->rightLowerCornerYCoordinate;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['LeftUpperCornerXCoordinate'])) {
            $model->leftUpperCornerXCoordinate = $map['LeftUpperCornerXCoordinate'];
        }
        if (isset($map['LeftUpperCornerYCoordinate'])) {
            $model->leftUpperCornerYCoordinate = $map['LeftUpperCornerYCoordinate'];
        }
        if (isset($map['LocationMarkTime'])) {
            $model->locationMarkTime = $map['LocationMarkTime'];
        }
        if (isset($map['PictureId1'])) {
            $model->pictureId1 = $map['PictureId1'];
        }
        if (isset($map['PictureId2'])) {
            $model->pictureId2 = $map['PictureId2'];
        }
        if (isset($map['PictureUrl1'])) {
            $model->pictureUrl1 = $map['PictureUrl1'];
        }
        if (isset($map['PictureUrl2'])) {
            $model->pictureUrl2 = $map['PictureUrl2'];
        }
        if (isset($map['RightLowerCornerXCoordinate'])) {
            $model->rightLowerCornerXCoordinate = $map['RightLowerCornerXCoordinate'];
        }
        if (isset($map['RightLowerCornerYCoordinate'])) {
            $model->rightLowerCornerYCoordinate = $map['RightLowerCornerYCoordinate'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
