<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class networkOptions extends Model
{
    /**
     * @description Specifies whether to enable the Jumbo Frames feature for the instance. Valid values:
     *
     *   false: does not enable the Jumbo Frames feature for the instance. The maximum transmission unit (MTU) value of all ENIs on the instance is set to 1500.
     *   true: enables the Jumbo Frames feature for the instance. The MTU value of all ENIs on the instance is set to 8500.
     *
     * >  The Jumbo Frames feature is supported by only 8th-generation or later instance types. For more information, see [MTUs](~~200512~~).
     * @example false
     *
     * @var bool
     */
    public $enableJumboFrame;
    protected $_name = [
        'enableJumboFrame' => 'EnableJumboFrame',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
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
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }

        return $model;
    }
}
