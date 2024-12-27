<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GenerateWebofficeTokenRequest extends Model
{
    /**
     * @description Specifies whether to enable cache preview.
     *
     *   true: enables cache preview. The document can be previewed only and cannot be collaboratively edited.
     *   false: does not enable cache preview. The document can be collaboratively edited when it is being previewed.
     *
     * >  Printing is not supported during cache preview.
     * @example false
     *
     * @var bool
     */
    public $cachePreview;

    /**
     * @description **If you have no special requirements, leave this parameter empty.**
     *
     * The configurations of authorization chains. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description Specifies whether to allow an upload of a document to the Object Storage Service (OSS) bucket. Valid values:
     *
     *   true: Documents can be directly uploaded to OSS. The uploaded document overwrites the existing document and a new version is generated for the document. Before you upload a new document, close the existing document if it is being edited. After the document is uploaded, wait for approximately 5 minutes before you open the document again so that the new version can successfully load. Upload a new document only when the existing is closed. Otherwise, the uploaded document is overwritten when the existing document is saved.
     *   false: Documents cannot be directly uploaded to OSS. If you try to upload a document, an error is returned. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $externalUploaded;

    /**
     * @description The name of the file. The extension must be included in the file name. By default, this parameter is set to the last depth level of the **SourceURI** parameter value.
     *
     * Supported extensions (only preview supported for .pdf):
     *
     *   Word documents: .doc, .docx, .txt, .dot, .wps, .wpt, .dotx, .docm, .dotm, and .rtf
     *   Presentation documents: .ppt, .pptx, .pptm, .ppsx, .ppsm, .pps, .potx, .potm, .dpt, and .dps
     *   Table documents: .et, .xls, .xlt, .xlsx, .xlsm, .xltx, .xltm, and .csv
     *   PDF documents: .pdf
     *
     * @example test.pptx
     *
     * @var string
     */
    public $filename;

    /**
     * @example false
     *
     * @var bool
     */
    public $hidecmb;

    /**
     * @description The notification settings. Only Simple Message Queue messages are supported. For more information, see [WebOffice message example](https://help.aliyun.com/document_detail/2743999.html).
     *
     * >  A notification is sent after the document is saved or renamed.
     * @var Notification
     */
    public $notification;

    /**
     * @example topic1
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The user permission settings in the JSON format.
     *
     * Each field is of type Boolean and can have a value of true and false (the default value):
     *
     *   Readonly: grants the permission to preview the document. This field is optional.
     *   Rename: grants the permission to rename the document. Notification messages of a rename event can be sent only by using SMQ. This field is optional.
     *   History: grants the permission to view historical versions. This field is optional.
     *   Copy: grants the permission to copy the document. This field is optional.
     *   Export: grants the permission to export the document as a PDF file. This field is optional.
     *   Print: grants the permission to print the document. This field is optional.
     *
     * >  Printing is not supported during cache preview.
     * @var WebofficePermission
     */
    public $permission;

    /**
     * @example 5
     *
     * @var int
     */
    public $previewPages;

    /**
     * @description This parameter is required.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example *
     *
     * @var string
     */
    public $referer;

    /**
     * @description This parameter is required.
     *
     * @example oss://imm-test/test.pptx
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The user information. The user information that you want to display on the WebOffice page. If you do not specify this parameter, the user name displayed is Unknown.
     *
     * @var WebofficeUser
     */
    public $user;

    /**
     * @description The user-defined data that you want to return in asynchronous messages. This parameter takes effect only when you specify the MNS settings in the Notification parameter. The maximum length of the value is 2,048 bytes.
     *
     * @example {"file_id": "abc"}
     *
     * @var string
     */
    public $userData;

    /**
     * @var WebofficeWatermark
     */
    public $watermark;
    protected $_name = [
        'cachePreview'     => 'CachePreview',
        'credentialConfig' => 'CredentialConfig',
        'externalUploaded' => 'ExternalUploaded',
        'filename'         => 'Filename',
        'hidecmb'          => 'Hidecmb',
        'notification'     => 'Notification',
        'notifyTopicName'  => 'NotifyTopicName',
        'password'         => 'Password',
        'permission'       => 'Permission',
        'previewPages'     => 'PreviewPages',
        'projectName'      => 'ProjectName',
        'referer'          => 'Referer',
        'sourceURI'        => 'SourceURI',
        'user'             => 'User',
        'userData'         => 'UserData',
        'watermark'        => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cachePreview) {
            $res['CachePreview'] = $this->cachePreview;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->externalUploaded) {
            $res['ExternalUploaded'] = $this->externalUploaded;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->hidecmb) {
            $res['Hidecmb'] = $this->hidecmb;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->permission) {
            $res['Permission'] = null !== $this->permission ? $this->permission->toMap() : null;
        }
        if (null !== $this->previewPages) {
            $res['PreviewPages'] = $this->previewPages;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = null !== $this->watermark ? $this->watermark->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateWebofficeTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CachePreview'])) {
            $model->cachePreview = $map['CachePreview'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['ExternalUploaded'])) {
            $model->externalUploaded = $map['ExternalUploaded'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['Hidecmb'])) {
            $model->hidecmb = $map['Hidecmb'];
        }
        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Permission'])) {
            $model->permission = WebofficePermission::fromMap($map['Permission']);
        }
        if (isset($map['PreviewPages'])) {
            $model->previewPages = $map['PreviewPages'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Referer'])) {
            $model->referer = $map['Referer'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['User'])) {
            $model->user = WebofficeUser::fromMap($map['User']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = WebofficeWatermark::fromMap($map['Watermark']);
        }

        return $model;
    }
}
