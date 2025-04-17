<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetAttachedMediaInfoRequest extends Model
{
    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $outputType;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'mediaIds' => 'MediaIds',
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

        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
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

        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
