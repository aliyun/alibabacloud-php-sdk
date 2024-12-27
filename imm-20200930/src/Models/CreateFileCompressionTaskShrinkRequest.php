<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateFileCompressionTaskShrinkRequest extends Model
{
    /**
     * @description The format of the package. Default value: zip.
     *
     * >  Only the ZIP format is supported.
     * @example zip
     *
     * @var string
     */
    public $compressedFormat;

    /**
     * @description **If you have no special requirements, leave this parameter empty.**
     *
     * The configurations of authorization chains. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @description The notification settings. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var string
     */
    public $notificationShrink;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The OSS URI of the inventory object that contains the objects to compress. The inventory object stores the objects to compress by using the same data structure of the Sources parameter in the JSON format. This parameter is suitable for specifying a large number of objects to compress.
     *
     * [{"URI":"oss://<bucket>/<object>", "Alias":"/new-dir/new-name"}]
     * @example oss://test-bucket/test-object.json
     *
     * @var string
     */
    public $sourceManifestURI;

    /**
     * @description The objects to be packed and packing rules.
     *
     * >  You must specify this parameter or the SourceManifestURI parameter. The Sources parameter can hold up to 100 packing rules. If you want to include more than 100 packing rules, use the SourceManifestURI parameter.
     * @var string
     */
    public $sourcesShrink;

    /**
     * @description The OSS URI of the package. The object name part in the URI is used as the name of the package. Example: `name.zip`.
     *
     * This parameter is required.
     * @example oss://test-bucket/test-target-object.zip
     *
     * @var string
     */
    public $targetURI;

    /**
     * @description The custom information, which is returned in an asynchronous notification and facilitates notification management. The maximum length of the value is 2,048 bytes.
     *
     * @example {"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'compressedFormat'       => 'CompressedFormat',
        'credentialConfigShrink' => 'CredentialConfig',
        'notificationShrink'     => 'Notification',
        'projectName'            => 'ProjectName',
        'sourceManifestURI'      => 'SourceManifestURI',
        'sourcesShrink'          => 'Sources',
        'targetURI'              => 'TargetURI',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressedFormat) {
            $res['CompressedFormat'] = $this->compressedFormat;
        }
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceManifestURI) {
            $res['SourceManifestURI'] = $this->sourceManifestURI;
        }
        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileCompressionTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressedFormat'])) {
            $model->compressedFormat = $map['CompressedFormat'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceManifestURI'])) {
            $model->sourceManifestURI = $map['SourceManifestURI'];
        }
        if (isset($map['Sources'])) {
            $model->sourcesShrink = $map['Sources'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
