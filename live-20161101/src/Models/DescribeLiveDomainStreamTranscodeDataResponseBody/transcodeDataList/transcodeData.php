<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponseBody\transcodeDataList;

use AlibabaCloud\Tea\Model;

class transcodeData extends Model
{
    /**
     * @var string
     */
    public $tanscodeType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $resolution;
    protected $_name = [
        'tanscodeType' => 'TanscodeType',
        'domain'       => 'Domain',
        'region'       => 'Region',
        'duration'     => 'Duration',
        'timeStamp'    => 'TimeStamp',
        'fps'          => 'Fps',
        'resolution'   => 'Resolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tanscodeType) {
            $res['TanscodeType'] = $this->tanscodeType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
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
        if (isset($map['TanscodeType'])) {
            $model->tanscodeType = $map['TanscodeType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
