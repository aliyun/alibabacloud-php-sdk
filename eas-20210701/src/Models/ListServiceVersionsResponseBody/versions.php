<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $buildTime;

    /**
     * @var string
     */
    public $imageAvailable;

    /**
     * @var int
     */
    public $imageId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $serviceConfig;

    /**
     * @var string
     */
    public $serviceRunnable;
    protected $_name = [
        'buildTime' => 'BuildTime',
        'imageAvailable' => 'ImageAvailable',
        'imageId' => 'ImageId',
        'message' => 'Message',
        'serviceConfig' => 'ServiceConfig',
        'serviceRunnable' => 'ServiceRunnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildTime) {
            $res['BuildTime'] = $this->buildTime;
        }

        if (null !== $this->imageAvailable) {
            $res['ImageAvailable'] = $this->imageAvailable;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }

        if (null !== $this->serviceRunnable) {
            $res['ServiceRunnable'] = $this->serviceRunnable;
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
        if (isset($map['BuildTime'])) {
            $model->buildTime = $map['BuildTime'];
        }

        if (isset($map['ImageAvailable'])) {
            $model->imageAvailable = $map['ImageAvailable'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }

        if (isset($map['ServiceRunnable'])) {
            $model->serviceRunnable = $map['ServiceRunnable'];
        }

        return $model;
    }
}
