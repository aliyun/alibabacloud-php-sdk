<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIMediaAuditJobRequest extends Model
{
    /**
     * @description The configuration information about the review task.
     *
     *   Other configuration items of the review task. Only the ResourceType field is supported. This field is used to specify the type of media files. You can adjust review standards and rules based on the type of media files.
     *   If you want to adjust review standards and rules based on ResourceType, submit a ticket to request technical support.
     *   The value of ResourceType can contain only letters, digits, and underscores (\_).
     *
     * @example {"ResourceType":"****_movie"}
     *
     * @var string
     */
    public $mediaAuditConfiguration;

    /**
     * @description The ID of the media file.
     *
     * You can obtain the ID of the media file on the Content Moderation page in the ApsaraVideo VOD console.
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
     * @description The ID of the AI template. If you do not specify this parameter, the ID of the default AI template for automated review is used.
     *
     * @example a07a7f7d7d10eb9fd999e56ecc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The custom settings. The value is a JSON string. You can configure settings such as message callbacks. For more information, see [Request parameters](~~86952~~).
     *
     * >  The callback configurations take effect only if you specify the HTTP callback URL and select the specific callback events in the ApsaraVideo VOD console.
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
