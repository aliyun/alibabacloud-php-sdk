<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponseBody\transcodeDataList;

use AlibabaCloud\Tea\Model;

class transcodeData extends Model
{
    /**
     * @description The main streaming domain. This parameter is returned only when you add the domain key to the value of the Split parameter.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The transcoding length. Unit: minutes.
     *
     * @example 2000
     *
     * @var int
     */
    public $duration;

    /**
     * @description The frame rate of the transcoded stream. This parameter is returned only when you add the fps key to the value of the Split parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $fps;

    /**
     * @description The region in which the domain name resides. Valid values:
     *
     * >  This parameter takes effect only when you set Split to region.
     *
     *   **cn-beijing**: China (Beijing)
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-qingdao**: China (Qingdao)
     *   **cn-shenzhen**: China (Shenzhen)
     *   **ap-northeast-1**: Japan (Tokyo)
     *   **ap-southeast-1**: Singapore
     *   **ap-southeast-5**: Indonesia (Jakarta)
     *   **eu-central-1**: Germany (Frankfurt)
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The resolution of the transcoded stream. This parameter is returned only when you add the resolution key to the value of the Split parameter. Valid values:
     *
     *   **2K**
     *   **4K**
     *   **LD**: low definition
     *   **SD**: standard definition
     *   **HD**: high definition
     *   **def**: audio
     *
     * @example HD
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The transcoding type. Valid values:
     *
     * >  This parameter takes effect only if the request parameter Split is set to transcode_type.
     *
     *   **H264NBHD**: Narrowband HD™ transcoding based on H.264
     *   **H265NBHD**: Narrowband HD™ transcoding based on H.265
     *   **AUDIO**: audio transcoding
     *
     * @example H264STD
     *
     * @var string
     */
    public $tanscodeType;

    /**
     * @description The timestamp of the data entry.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'domain' => 'Domain',
        'duration' => 'Duration',
        'fps' => 'Fps',
        'region' => 'Region',
        'resolution' => 'Resolution',
        'tanscodeType' => 'TanscodeType',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->tanscodeType) {
            $res['TanscodeType'] = $this->tanscodeType;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['TanscodeType'])) {
            $model->tanscodeType = $map['TanscodeType'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
