<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaProducingJobRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ****12e8864746a0a398****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The material parameters of the template, in the JSON format. If TemplateId is specified, ClipsParam must also be specified. For more information, see [Create and use a regular template](https://help.aliyun.com/document_detail/328557.html) and [Create and use advanced templates](https://help.aliyun.com/document_detail/291418.html).
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The parameters for editing and production. For more information, see [EditingProduceConfig](https://help.aliyun.com/document_detail/357745.html#title-10z-t9u-n69).
     *
     * >  If no thumbnail is specified in EditingProduceConfig, the first frame of the video is used as the thumbnail.
     *
     *   AutoRegisterInputVodMedia: specifies whether to automatically register the ApsaraVideo VOD media assets in your timeline with IMS. Default value: true.
     *   OutputWebmTransparentChannel: specifies whether the output video contains alpha channels. Default value: false.
     *   CoverConfig: the custom thumbnail parameters.
     *
     * @example {
     * }
     * @var string
     */
    public $editingProduceConfig;

    /**
     * @description The metadata of the produced video, in the JSON format. For more information about the parameters, see [MediaMetadata](https://help.aliyun.com/document_detail/357745.html?spm=a2c4g.445712.0.0.49a716dbA8hgdz#97ff26d0e3c28).
     *
     * @example {
     * }
     * @var string
     */
    public $mediaMetadata;

    /**
     * @description The configurations of the output file, in the JSON format. You can specify an OSS URL or a storage location in a storage bucket of ApsaraVideo VOD.
     *
     * This parameter is required.
     * @example {"MediaURL":"https://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4"}
     *
     * @var string
     */
    public $outputMediaConfig;

    /**
     * @description The type of the output file. Valid values:
     *
     *   oss-object: OSS object in an OSS bucket.
     *   vod-media: media asset in ApsaraVideo VOD.
     *   S3: output file based on the Amazon Simple Storage Service (S3) protocol.
     *
     * @example oss-object
     *
     * @var string
     */
    public $outputMediaTarget;

    /**
     * @description The ID of the editing project.
     *
     * > : You must specify one of ProgectId, Timeline, and TempalteId and leave the other two parameters empty.
     * @example xxxxxfb2101cb318xxxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The metadata of the editing project, in the JSON format. For more information about the parameters, see [ProjectMetadata](https://help.aliyun.com/document_detail/357745.html#title-yvp-81k-wff).
     *
     * @var string
     */
    public $projectMetadata;

    /**
     * @description The source of the editing and production request. Valid values:
     *
     *   OpenAPI
     *   AliyunConsole
     *   WebSDK
     *
     * @example OPENAPI
     *
     * @var string
     */
    public $source;

    /**
     * @description The template ID. The template is used to build a timeline with ease.
     *
     * > : You must specify one of ProgectId, Timeline, and TempalteId and leave the other two parameters empty. If TemplateId is specified, ClipsParam must also be specified.
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $timeline;

    /**
     * @description The user-defined data in the JSON format, which can be up to 512 bytes in length. You can specify a custom callback URL. For more information, see [Configure a callback upon editing completion](https://help.aliyun.com/document_detail/451631.html).
     *
     * @example {"NotifyAddress":"https://xx.com/xx","RegisterMediaNotifyAddress":"https://xxx.com/xx"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'clipsParam'           => 'ClipsParam',
        'editingProduceConfig' => 'EditingProduceConfig',
        'mediaMetadata'        => 'MediaMetadata',
        'outputMediaConfig'    => 'OutputMediaConfig',
        'outputMediaTarget'    => 'OutputMediaTarget',
        'projectId'            => 'ProjectId',
        'projectMetadata'      => 'ProjectMetadata',
        'source'               => 'Source',
        'templateId'           => 'TemplateId',
        'timeline'             => 'Timeline',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->editingProduceConfig) {
            $res['EditingProduceConfig'] = $this->editingProduceConfig;
        }
        if (null !== $this->mediaMetadata) {
            $res['MediaMetadata'] = $this->mediaMetadata;
        }
        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = $this->outputMediaConfig;
        }
        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectMetadata) {
            $res['ProjectMetadata'] = $this->projectMetadata;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaProducingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['EditingProduceConfig'])) {
            $model->editingProduceConfig = $map['EditingProduceConfig'];
        }
        if (isset($map['MediaMetadata'])) {
            $model->mediaMetadata = $map['MediaMetadata'];
        }
        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = $map['OutputMediaConfig'];
        }
        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectMetadata'])) {
            $model->projectMetadata = $map['ProjectMetadata'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
