<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;

class GeneralRecognitionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $picContent;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'picContent'   => 'PicContent',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GeneralRecognitionRequest
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

        return $model;
    }
}
