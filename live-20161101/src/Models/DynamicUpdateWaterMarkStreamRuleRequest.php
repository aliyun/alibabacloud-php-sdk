<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DynamicUpdateWaterMarkStreamRuleRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example pull.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the stream that contains the watermark.
     *
     * This parameter is required.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $stream;

    /**
     * @description The watermark template ID. You can call the [DescribeLiveStreamWatermarks](https://help.aliyun.com/document_detail/2848102.html) operation to obtain available watermark template IDs.
     *
     * >  The TemplateId parameter is used to replace the watermark template ID during live streaming.
     *
     * This parameter is required.
     *
     * @example 749b7594-86d6-37b1-513b-e1e19845****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'app' => 'App',
        'domain' => 'Domain',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'stream' => 'Stream',
        'templateId' => 'TemplateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DynamicUpdateWaterMarkStreamRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
