<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetImageInfosRequest extends Model
{
    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $imageIds;

    /**
     * @var string
     */
    public $outputType;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'imageIds' => 'ImageIds',
        'outputType' => 'OutputType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }

        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }

        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
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
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }

        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }

        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
