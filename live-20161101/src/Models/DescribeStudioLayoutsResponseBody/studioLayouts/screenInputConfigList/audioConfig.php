<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\screenInputConfigList;

use AlibabaCloud\Tea\Model;

class audioConfig extends Model
{
    /**
     * @var string
     */
    public $validChannel;

    /**
     * @var float
     */
    public $volumeRate;
    protected $_name = [
        'validChannel' => 'ValidChannel',
        'volumeRate'   => 'VolumeRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->validChannel) {
            $res['ValidChannel'] = $this->validChannel;
        }
        if (null !== $this->volumeRate) {
            $res['VolumeRate'] = $this->volumeRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValidChannel'])) {
            $model->validChannel = $map['ValidChannel'];
        }
        if (isset($map['VolumeRate'])) {
            $model->volumeRate = $map['VolumeRate'];
        }

        return $model;
    }
}
