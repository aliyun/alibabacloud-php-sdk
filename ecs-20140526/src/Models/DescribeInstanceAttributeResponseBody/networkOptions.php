<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class networkOptions extends Model
{
    /**
     * @var string
     */
    public $bandwidthWeighting;

    /**
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @var bool
     */
    public $enableNetworkEncryption;
    protected $_name = [
        'bandwidthWeighting' => 'BandwidthWeighting',
        'enableJumboFrame' => 'EnableJumboFrame',
        'enableNetworkEncryption' => 'EnableNetworkEncryption',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthWeighting) {
            $res['BandwidthWeighting'] = $this->bandwidthWeighting;
        }
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }
        if (null !== $this->enableNetworkEncryption) {
            $res['EnableNetworkEncryption'] = $this->enableNetworkEncryption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthWeighting'])) {
            $model->bandwidthWeighting = $map['BandwidthWeighting'];
        }
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }
        if (isset($map['EnableNetworkEncryption'])) {
            $model->enableNetworkEncryption = $map['EnableNetworkEncryption'];
        }

        return $model;
    }
}
