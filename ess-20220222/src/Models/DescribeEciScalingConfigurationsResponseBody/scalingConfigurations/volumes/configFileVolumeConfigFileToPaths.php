<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\volumes;

use AlibabaCloud\Tea\Model;

class configFileVolumeConfigFileToPaths extends Model
{
    /**
     * @description The information about the image repository.
     *
     * @example bGl1bWk=
     *
     * @var string
     */
    public $content;

    /**
     * @description The information about the image repository.
     *
     * @example 0644
     *
     * @var int
     */
    public $mode;

    /**
     * @description The content of the configuration file (32 KB).
     *
     * @example /usr/bin/
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'content' => 'Content',
        'mode'    => 'Mode',
        'path'    => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configFileVolumeConfigFileToPaths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
