<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ImageSegmentationAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picContentObject;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $returnPicFormat;

    /**
     * @var string
     */
    public $returnPicType;
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'instanceName'     => 'InstanceName',
        'returnPicFormat'  => 'ReturnPicFormat',
        'returnPicType'    => 'ReturnPicType',
    ];

    public function validate()
    {
        Model::validateRequired('picContentObject', $this->picContentObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picContentObject) {
            $res['PicContentObject'] = $this->picContentObject;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
     * @return ImageSegmentationAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicContentObject'])) {
            $model->picContentObject = $map['PicContentObject'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
