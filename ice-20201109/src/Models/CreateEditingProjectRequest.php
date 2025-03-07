<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateEditingProjectRequest extends Model
{
    /**
     * @description The business configuration of the project. This parameter can be ignored for general editing projects.
     *
     * If you set OutputMediaTarget to vod-media, the setting of OutputMediaConfig.Path does not take effect.
     * @example { "OutputMediaConfig" : { "StorageLocation": "test-bucket.oss-cn-shanghai.aliyuncs.com", "Path": "test-path" }, "OutputMediaTarget": "oss-object", "ReservationTime": "2021-06-21T08:05:00Z" }
     *
     * @var string
     */
    public $businessConfig;

    /**
     * @description The material parameter corresponding to the template, in the JSON format. If TemplateId is specified, ClipsParam must also be specified. For more information<props="china">, see [Create and use a regular template](https://help.aliyun.com/document_detail/328557.html) and [Create and use an advanced template](https://help.aliyun.com/document_detail/291418.html).
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example https://example.com/example.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the online editing project.
     *
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description The material associated with the project. Separate multiple material IDs with commas (,). Each type supports up to 10 material IDs.
     *
     * @example {"video":"*****2e057304fcd9b145c5cafc*****", "image":"****8021a8d493da643c8acd98*****,*****cb6307a4edea614d8b3f3c*****", "liveStream": "[{\\"appName\\":\\"testrecord\\",\\"domainName\\":\\"test.alivecdn.com\\",\\"liveUrl\\":\\"rtmp://test.alivecdn.com/testrecord/teststream\\",\\"streamName\\":\\"teststream\\"}]", "editingProject": "*****9b145c5cafc2e057304fcd*****"}
     *
     * @var string
     */
    public $materialMaps;

    /**
     * @description The type of the editing project. Valid values: EditingProject and LiveEditingProject. A value of EditingProject indicates a regular editing project, and a value of LiveEditingProject indicates a live stream editing project.
     *
     * @example LiveEditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @description The template ID. This parameter is used to quickly build a timeline with ease. Note: Only one of Timeline and TemplateId can be specified. If TemplateId is specified, ClipsParam must also be specified.
     *
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template type. This parameter is required if you create a template-based online editing project. Default value: Timeline. Valid values:
     *
     *   Timeline: a regular template.
     *   VETemplate: an advanced template.
     *
     * @example Timeline
     *
     * @var string
     */
    public $templateType;

    /**
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****4d7cf14dc7b83b0e801c****"},{"MediaId":"****4d7cf14dc7b83b0e801c****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The title of the online editing project.
     *
     * This parameter is required.
     * @example example
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'businessConfig' => 'BusinessConfig',
        'clipsParam'     => 'ClipsParam',
        'coverURL'       => 'CoverURL',
        'description'    => 'Description',
        'materialMaps'   => 'MaterialMaps',
        'projectType'    => 'ProjectType',
        'templateId'     => 'TemplateId',
        'templateType'   => 'TemplateType',
        'timeline'       => 'Timeline',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessConfig) {
            $res['BusinessConfig'] = $this->businessConfig;
        }
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->materialMaps) {
            $res['MaterialMaps'] = $this->materialMaps;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessConfig'])) {
            $model->businessConfig = $map['BusinessConfig'];
        }
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaterialMaps'])) {
            $model->materialMaps = $map['MaterialMaps'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
