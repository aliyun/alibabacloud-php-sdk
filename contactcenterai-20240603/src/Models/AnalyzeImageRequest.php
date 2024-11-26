<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @var string[]
     */
    public $resultTypes;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $stream;
    protected $_name = [
        'imageUrls'   => 'imageUrls',
        'resultTypes' => 'resultTypes',
        'stream'      => 'stream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrls) {
            $res['imageUrls'] = $this->imageUrls;
        }
        if (null !== $this->resultTypes) {
            $res['resultTypes'] = $this->resultTypes;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = $map['imageUrls'];
            }
        }
        if (isset($map['resultTypes'])) {
            if (!empty($map['resultTypes'])) {
                $model->resultTypes = $map['resultTypes'];
            }
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
