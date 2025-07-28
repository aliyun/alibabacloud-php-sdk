<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class networkOptions extends Model
{
    /**
     * @var string
     */
    public $bandwidthWeighting;

    /**
     * @description Specifies whether to enable the Jumbo Frames feature for the instance. Valid values:
     *
     *   false: does not enable the Jumbo Frames feature for the instance. The maximum transmission unit (MTU) value of all ENIs on the instance is set to 1500.
     *   true: enables the Jumbo Frames feature for the instance. The MTU value of all ENIs on the instance is set to 8500.
     *
     * Default value: true.
     *
     * >  The Jumbo Frames feature is supported by only 8th-generation or later instance types. For more information, see [Jumbo Frames](https://help.aliyun.com/document_detail/200512.html).
     *
     * @example false
     *
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
