<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;

class ImageSegmentationRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $picContent;

    /**
     * @var string
     */
    public $returnPicFormat;

    /**
     * @var string
     */
    public $returnPicType;
    protected $_name = [
        'instanceName'    => 'InstanceName',
        'picContent'      => 'PicContent',
        'returnPicFormat' => 'ReturnPicFormat',
        'returnPicType'   => 'ReturnPicType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->returnPicFormat) {
            $res['ReturnPicFormat'] = $this->returnPicFormat;
        }
        if (null !== $this->returnPicType) {
            $res['ReturnPicType'] = $this->returnPicType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageSegmentationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['ReturnPicFormat'])) {
            $model->returnPicFormat = $map['ReturnPicFormat'];
        }
        if (isset($map['ReturnPicType'])) {
            $model->returnPicType = $map['ReturnPicType'];
        }

        return $model;
    }
}
