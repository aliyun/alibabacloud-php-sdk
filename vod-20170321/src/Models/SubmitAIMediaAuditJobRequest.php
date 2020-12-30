<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIMediaAuditJobRequest extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $mediaAuditConfiguration;
    protected $_name = [
        'mediaId'                 => 'MediaId',
        'templateId'              => 'TemplateId',
        'userData'                => 'UserData',
        'mediaType'               => 'MediaType',
        'mediaAuditConfiguration' => 'MediaAuditConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->mediaAuditConfiguration) {
            $res['MediaAuditConfiguration'] = $this->mediaAuditConfiguration;
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['MediaAuditConfiguration'])) {
            $model->mediaAuditConfiguration = $map['MediaAuditConfiguration'];
        }

        return $model;
    }
}
