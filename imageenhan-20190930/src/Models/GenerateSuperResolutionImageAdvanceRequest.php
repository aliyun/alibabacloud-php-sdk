<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateSuperResolutionImageAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageUrlObject;

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
        'imageUrlObject' => 'ImageUrl',
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
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
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
            $model->imageUrlObject = $map['ImageUrl'];
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
