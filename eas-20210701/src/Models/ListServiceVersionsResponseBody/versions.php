<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @description The time when the service version was created. The time is displayed in UTC.
     *
     * @example 2022-08-29T22:02:14Z
     *
     * @var string
     */
    public $buildTime;

    /**
     * @description Indicates whether the image is available. Valid values:
     *
     *   true: The image is available.
     *   false: The image is unavailable.
     *   unknown: The availability of the image is unknown.
     *
     * @example true
     *
     * @var string
     */
    public $imageAvailable;

    /**
     * @description The image ID.
     *
     * @example 4
     *
     * @var int
     */
    public $imageId;

    /**
     * @description The returned message.
     *
     * @example Service is Running
     *
     * @var string
     */
    public $message;

    /**
     * @description The service deployment configurations. This parameter is returned only if the service is deployed by using a custom image.
     *
     * @example {
     * }
     * @var string
     */
    public $serviceConfig;

    /**
     * @description Indicates whether Elastic Algorithm service (EAS) is activated. Valid values:
     *
     *   true: EAS is activated.
     *   false: EAS is not activated.
     *   unknown: The activation of EAS is unknown.
     *
     * @example true
     *
     * @var string
     */
    public $serviceRunnable;
    protected $_name = [
        'buildTime'       => 'BuildTime',
        'imageAvailable'  => 'ImageAvailable',
        'imageId'         => 'ImageId',
        'message'         => 'Message',
        'serviceConfig'   => 'ServiceConfig',
        'serviceRunnable' => 'ServiceRunnable',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return versions
     */
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
