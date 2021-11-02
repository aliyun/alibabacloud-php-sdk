<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitDynamicImageJobRequest extends Model
{
    /**
     * @var string
     */
    public $dynamicImageTemplateId;

    /**
     * @var string
     */
    public $overrideParams;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'dynamicImageTemplateId' => 'DynamicImageTemplateId',
        'overrideParams'         => 'OverrideParams',
        'videoId'                => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicImageTemplateId) {
            $res['DynamicImageTemplateId'] = $this->dynamicImageTemplateId;
        }
        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDynamicImageJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicImageTemplateId'])) {
            $model->dynamicImageTemplateId = $map['DynamicImageTemplateId'];
        }
        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
