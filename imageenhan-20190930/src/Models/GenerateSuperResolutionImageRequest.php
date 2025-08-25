<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;

class GenerateSuperResolutionImageRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var int
     */
    public $outputQuality;

    /**
     * @var int
     */
    public $scale;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'outputFormat' => 'OutputFormat',
        'outputQuality' => 'OutputQuality',
        'scale' => 'Scale',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }

        if (null !== $this->outputQuality) {
            $res['OutputQuality'] = $this->outputQuality;
        }

        if (null !== $this->scale) {
            $res['Scale'] = $this->scale;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }

        if (isset($map['OutputQuality'])) {
            $model->outputQuality = $map['OutputQuality'];
        }

        if (isset($map['Scale'])) {
            $model->scale = $map['Scale'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
