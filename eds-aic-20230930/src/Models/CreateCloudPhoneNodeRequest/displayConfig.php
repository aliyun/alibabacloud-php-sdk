<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest;

use AlibabaCloud\Tea\Model;

class displayConfig extends Model
{
    /**
     * @var int
     */
    public $dpi;

    /**
     * @var int
     */
    public $fps;

    /**
     * @var string
     */
    public $lockResolution;
    protected $_name = [
        'dpi' => 'Dpi',
        'fps' => 'Fps',
        'lockResolution' => 'LockResolution',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dpi) {
            $res['Dpi'] = $this->dpi;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->lockResolution) {
            $res['LockResolution'] = $this->lockResolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return displayConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dpi'])) {
            $model->dpi = $map['Dpi'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['LockResolution'])) {
            $model->lockResolution = $map['LockResolution'];
        }

        return $model;
    }
}
