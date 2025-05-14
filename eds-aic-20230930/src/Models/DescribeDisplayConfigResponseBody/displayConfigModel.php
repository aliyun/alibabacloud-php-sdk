<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigResponseBody;

use AlibabaCloud\Dara\Model;

class displayConfigModel extends Model
{
    /**
     * @var string
     */
    public $androidInstanceId;

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

    /**
     * @var int
     */
    public $resolutionHeight;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
