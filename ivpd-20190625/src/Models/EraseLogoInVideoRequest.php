<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\EraseLogoInVideoRequest\boxes;
use AlibabaCloud\Tea\Model;

class EraseLogoInVideoRequest extends Model
{
    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'boxes'    => 'Boxes',
        'jobId'    => 'JobId',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EraseLogoInVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
