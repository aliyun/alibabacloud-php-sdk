<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveStreamWatermarkRuleRequest extends Model
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
     * @description The description of the custom rule.
     *
     * @example my rule
     *
     * @var string
     */
    public $description;

    /**
     * @description The streaming domain.
     *
     * This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the custom rule.
     *
     * This parameter is required.
     *
     * @example WatermarkRule****
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the live stream. The following rules apply:
     *
     *   A stream name can be exactly matched. Example: liveStreamA.
     *   Fuzzy match is also supported. The use of an asterisk (`*`) allows all approximate matches to be found.
     *   You can place the asterisk before or after an approximate string.
     * This parameter is required.
     * @example liveStreamA
     *
     * @var string
     */
    public $stream;

    /**
     * @description The ID of the watermark template.
     *
     * >  You can obtain the template ID by checking the value of the TemplateId parameter that is returned by the [AddLiveStreamWatermark](https://help.aliyun.com/document_detail/410759.html) operation.
     *
     * This parameter is required.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'app' => 'App',
        'description' => 'Description',
        'domain' => 'Domain',
        'name' => 'Name',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return AddLiveStreamWatermarkRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
