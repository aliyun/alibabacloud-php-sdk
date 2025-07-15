<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigResponseBody;

use AlibabaCloud\Tea\Model;

class displayConfigModel extends Model
{
    /**
     * @example cpn-jewjt8xryuituz4qn-****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @example 240
     *
     * @var int
     */
    public $dpi;

    /**
     * @example null
     *
     * @var int
     */
    public $fps;

    /**
     * @example off
     *
     * @var string
     */
    public $lockResolution;

    /**
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
     * @example 720
     *
     * @var int
     */
    public $resolutionWidth;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'dpi' => 'Dpi',
        'fps' => 'Fps',
        'lockResolution' => 'LockResolution',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->dpi) {
            $res['Dpi'] = $this->dpi;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->lockResolution) {
            $res['LockResolution'] = $this->lockResolution;
        }
        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }
        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return displayConfigModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['Dpi'])) {
            $model->dpi = $map['Dpi'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['LockResolution'])) {
            $model->lockResolution = $map['LockResolution'];
        }
        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }
        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }

        return $model;
    }
}
