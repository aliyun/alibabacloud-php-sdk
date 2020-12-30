<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAttachedMediaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @var string
     */
    public $outputType;
    protected $_name = [
        'mediaIds'            => 'MediaIds',
        'authTimeout'         => 'AuthTimeout',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'outputType'          => 'OutputType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAttachedMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
