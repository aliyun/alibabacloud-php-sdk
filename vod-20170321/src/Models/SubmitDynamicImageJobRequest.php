<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

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
        'overrideParams' => 'OverrideParams',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
