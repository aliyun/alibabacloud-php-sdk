<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GeneralRecognitionAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picContentObject;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'instanceName'     => 'InstanceName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GeneralRecognitionAdvanceRequest
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

        return $model;
    }
}
