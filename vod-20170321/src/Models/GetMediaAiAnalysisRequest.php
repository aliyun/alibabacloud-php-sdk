<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetMediaAiAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $resultTypes;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'mediaId' => 'MediaId',
        'outputType' => 'OutputType',
        'resultTypes' => 'ResultTypes',
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

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        if (null !== $this->resultTypes) {
            $res['ResultTypes'] = $this->resultTypes;
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

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        if (isset($map['ResultTypes'])) {
            $model->resultTypes = $map['ResultTypes'];
        }

        return $model;
    }
}
