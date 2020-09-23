<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SearchImageByPicAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picContentObject;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $crop;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $num;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $filter;
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'categoryId'       => 'CategoryId',
        'instanceName'     => 'InstanceName',
        'crop'             => 'Crop',
        'region'           => 'Region',
        'num'              => 'Num',
        'start'            => 'Start',
        'filter'           => 'Filter',
    ];

    public function validate()
    {
        Model::validateRequired('picContentObject', $this->picContentObject, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picContentObject) {
            $res['PicContentObject'] = $this->picContentObject;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByPicAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicContentObject'])) {
            $model->picContentObject = $map['PicContentObject'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        return $model;
    }
}
