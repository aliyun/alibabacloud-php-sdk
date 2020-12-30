<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitDynamicImageJobRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $dynamicImageTemplateId;

    /**
     * @var string
     */
    public $overrideParams;
    protected $_name = [
        'videoId'                => 'VideoId',
        'dynamicImageTemplateId' => 'DynamicImageTemplateId',
        'overrideParams'         => 'OverrideParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->dynamicImageTemplateId) {
            $res['DynamicImageTemplateId'] = $this->dynamicImageTemplateId;
        }
        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['DynamicImageTemplateId'])) {
            $model->dynamicImageTemplateId = $map['DynamicImageTemplateId'];
        }
        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }

        return $model;
    }
}
