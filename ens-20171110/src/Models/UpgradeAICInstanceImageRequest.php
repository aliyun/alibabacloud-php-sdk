<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UpgradeAICInstanceImageRequest extends Model
{
    /**
     * @description The ID of the AIC image.
     *
     * This parameter is required.
     * @example m-****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The IDs of the servers.
     *
     * This parameter is required.
     * @var string[]
     */
    public $serverIds;

    /**
     * @description The timeout period of the update. Unit: seconds.
     *
     * @example 1800
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'imageId'   => 'ImageId',
        'serverIds' => 'ServerIds',
        'timeout'   => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->serverIds) {
            $res['ServerIds'] = $this->serverIds;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeAICInstanceImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = $map['ServerIds'];
            }
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
