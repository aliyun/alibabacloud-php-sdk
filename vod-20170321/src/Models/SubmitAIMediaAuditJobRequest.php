<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIMediaAuditJobRequest extends Model
{
    /**
     * @description The configuration information about the review job.
     *
     *   Other configuration items of the review job. Only the ResourceType field is supported. This field is used to specify the type of media files. You can adjust review standards and rules based on the type of media files.
     *   If you want to modify the review standard and rules based on ResourceType, [submit a request on Yida](https://yida.alibaba-inc.com/o/ticketapply) to reach technical support.
     *   The value of ResourceType can contain only letters, digits, and underscores (_).
     *
     * @example {"ResourceType":"****_movie"}
     *
     * @var string
     */
    public $mediaAuditConfiguration;

    /**
     * @description The ID of the video file. To obtain the file ID, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com) and choose **Review Management** > **Content Moderation** in the left-side navigation pane.
     *
     * This parameter is required.
     * @example fe028d09441afffb138cd7ee****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The type of the media file. Only **video** is supported.
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The ID of the AI template. You can use one of the following methods to obtain the ID of the AI template:
     *
     *   Obtain the ID of the AI template from the response to the [AddAITemplate](https://help.aliyun.com/document_detail/102930.html) operation. The value of TemplateId is the ID of the AI template.
     *   Obtain the ID of the AI template from the response to the [ListAITemplate](https://help.aliyun.com/document_detail/102936.html) operation. The value of TemplateId is the ID of the AI template.
     *
     * >  If you do not specify an ID, the ID of the default AI template is used.
     * @example a07a7f7d7d10eb9fd999e56ecc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The custom settings. The value must be a JSON string. You can configure settings such as message callbacks. For more information, see [UserData](https://help.aliyun.com/document_detail/86952.html).
     *
     * >  To use the callback configurations specified by this parameter, you must configure an HTTP callback URL and specify the types of the callback events in the ApsaraVideo VOD console. Otherwise, the callback configurations do not take effect. For more information about how to configure HTTP callback settings in the ApsaraVideo VOD console, see [Configure callback settings](https://help.aliyun.com/document_detail/86071.html).
     * @example {"MessageCallback":{"CallbackURL":"http://test.test.com"},"Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'mediaAuditConfiguration' => 'MediaAuditConfiguration',
        'mediaId'                 => 'MediaId',
        'mediaType'               => 'MediaType',
        'templateId'              => 'TemplateId',
        'userData'                => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaAuditConfiguration) {
            $res['MediaAuditConfiguration'] = $this->mediaAuditConfiguration;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAIMediaAuditJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaAuditConfiguration'])) {
            $model->mediaAuditConfiguration = $map['MediaAuditConfiguration'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
