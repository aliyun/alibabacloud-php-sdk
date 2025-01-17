<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetMediaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $inputURL;
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
    public $returnDetailedInfo;
    protected $_name = [
        'inputURL'           => 'InputURL',
        'mediaId'            => 'MediaId',
        'outputType'         => 'OutputType',
        'returnDetailedInfo' => 'ReturnDetailedInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        if (null !== $this->returnDetailedInfo) {
            $res['ReturnDetailedInfo'] = $this->returnDetailedInfo;
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
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        if (isset($map['ReturnDetailedInfo'])) {
            $model->returnDetailedInfo = $map['ReturnDetailedInfo'];
        }

        return $model;
    }
}
