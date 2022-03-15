<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ConvertHdrVideoAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $HDRFormat;

    /**
     * @var int
     */
    public $maxIlluminance;
    protected $_name = [
        'videoURLObject' => 'VideoURLObject',
        'bitrate'        => 'Bitrate',
        'HDRFormat'      => 'HDRFormat',
        'maxIlluminance' => 'MaxIlluminance',
    ];

    public function validate()
    {
        Model::validateRequired('videoURLObject', $this->videoURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURLObject'] = $this->videoURLObject;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->HDRFormat) {
            $res['HDRFormat'] = $this->HDRFormat;
        }
        if (null !== $this->maxIlluminance) {
            $res['MaxIlluminance'] = $this->maxIlluminance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertHdrVideoAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURLObject'])) {
            $model->videoURLObject = $map['VideoURLObject'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['HDRFormat'])) {
            $model->HDRFormat = $map['HDRFormat'];
        }
        if (isset($map['MaxIlluminance'])) {
            $model->maxIlluminance = $map['MaxIlluminance'];
        }

        return $model;
    }
}
