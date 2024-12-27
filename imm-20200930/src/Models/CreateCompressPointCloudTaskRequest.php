<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCompressPointCloudTaskRequest extends Model
{
    /**
     * @description The compression algorithm. Valid values:
     *
     *   octree
     *   kdtree
     *
     * This parameter is required.
     * @example octree
     *
     * @var string
     */
    public $compressMethod;

    /**
     * @description **If you have no special requirements, leave this parameter empty.**
     *
     * The configurations of authorization chains. This parameter is optional. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The k-d tree compression options.
     *
     * @var KdtreeOption
     */
    public $kdtreeOption;

    /**
     * @description The notification settings. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The octree compression options.
     *
     * @var OctreeOption
     */
    public $octreeOption;

    /**
     * @description The PCD property fields and the compression order in which the data is decompressed after the compression is complete.
     *
     *   If octree of Point Cloud Library (PCL) is used for compression, ["xyz"] is supported.
     *   If Draco k-dimensional (k-d) tree is used for compression, ["xyz"] and ["xyz", "intensity"] are supported.
     *
     * This parameter is required.
     * @var string[]
     */
    public $pointCloudFields;

    /**
     * @description The file format. Set the value to the default value: pcd.
     *
     * @example pcd
     *
     * @var string
     */
    public $pointCloudFileFormat;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The OSS URL of the PCD file.
     *
     * This parameter is required.
     * @example oss://test/src/test.pcd
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The custom tags, which can be used to search for and filter asynchronous tasks.
     *
     * @example {"LabelKey": "Value"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The OSS URL of the output file after compression.
     *
     * This parameter is required.
     * @example oss://test/tgt
     *
     * @var string
     */
    public $targetURI;

    /**
     * @description The custom data, which is returned in an asynchronous notification and facilitates notification management. The maximum length is 2,048 bytes.
     *
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'compressMethod'       => 'CompressMethod',
        'credentialConfig'     => 'CredentialConfig',
        'kdtreeOption'         => 'KdtreeOption',
        'notification'         => 'Notification',
        'octreeOption'         => 'OctreeOption',
        'pointCloudFields'     => 'PointCloudFields',
        'pointCloudFileFormat' => 'PointCloudFileFormat',
        'projectName'          => 'ProjectName',
        'sourceURI'            => 'SourceURI',
        'tags'                 => 'Tags',
        'targetURI'            => 'TargetURI',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressMethod) {
            $res['CompressMethod'] = $this->compressMethod;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->kdtreeOption) {
            $res['KdtreeOption'] = null !== $this->kdtreeOption ? $this->kdtreeOption->toMap() : null;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->octreeOption) {
            $res['OctreeOption'] = null !== $this->octreeOption ? $this->octreeOption->toMap() : null;
        }
        if (null !== $this->pointCloudFields) {
            $res['PointCloudFields'] = $this->pointCloudFields;
        }
        if (null !== $this->pointCloudFileFormat) {
            $res['PointCloudFileFormat'] = $this->pointCloudFileFormat;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return CreateCompressPointCloudTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressMethod'])) {
            $model->compressMethod = $map['CompressMethod'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['KdtreeOption'])) {
            $model->kdtreeOption = KdtreeOption::fromMap($map['KdtreeOption']);
        }
        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }
        if (isset($map['OctreeOption'])) {
            $model->octreeOption = OctreeOption::fromMap($map['OctreeOption']);
        }
        if (isset($map['PointCloudFields'])) {
            if (!empty($map['PointCloudFields'])) {
                $model->pointCloudFields = $map['PointCloudFields'];
            }
        }
        if (isset($map['PointCloudFileFormat'])) {
            $model->pointCloudFileFormat = $map['PointCloudFileFormat'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
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
