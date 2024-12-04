<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentResponseBody extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example {     "nodes": [         {             "id": "id-4c50-1609236241393-76174",             "name": "读数据表",             "metadata": {                 "identifier": "data_source",                 "version": "v1",                 "provider": "pai"             },             "properties": [                 {                     "name": "hasPartition",                     "value": false                 },                 {                     "name": "inputTableName",                     "value": "pai_online_project.e_commerce_test_data"                 }             ],             "position": {                 "x": 427,                 "y": 123             }         },         {             "id": "id-23ce-1609236252041-30106",             "name": "读数据表",             "metadata": {                 "identifier": "data_source",                 "version": "v1",                 "provider": "pai"             },             "properties": [                 {                     "name": "inputTableName",                     "value": "pai_online_project.e_commerce_train_data"                 },                 {                     "name": "hasPartition",                     "value": false                 }             ],             "position": {                 "x": 226,                 "y": 127             }         },         {             "id": "id-97a7-1609236275421-84245",             "name": "DeepFM",             "metadata": {                 "identifier": "deepfm",                 "version": "v1",                 "provider": "pai"             },             "properties": [                 {                     "name": "trainModel",                     "value": "train"                 },                 {                     "name": "arn",                     "value": true                 },                 {                     "name": "cluster",                     "value": "\n{\n    \"ps\": {\n        \"count\": 2,\n        \"cpu\": 1000,\n        \"memory\": 40000\n    },\n    \"worker\": {\n        \"count\": 8,\n        \"cpu\": 1000,\n        \"memory\": 40000\n    }\n}"                 }             ],             "position": {                 "x": 323,                 "y": 345             }         }     ],     "edges": [         {             "source": "id-23ce-1609236252041-30106",             "sourceAnchor": "outputTable",             "targetAnchor": "input1TableName",             "target": "id-97a7-1609236275421-84245"         },         {             "source": "id-4c50-1609236241393-76174",             "sourceAnchor": "outputTable",             "targetAnchor": "input2TableName",             "target": "id-97a7-1609236275421-84245"         }     ],     "globalParams": [],     "globalSettings": []  }
     *
     * @var string
     */
    public $content;

    /**
     * @example 1326689413376250
     *
     * @var string
     */
    public $creator;

    /**
     * @example Pipeline Draft Description
     *
     * @var string
     */
    public $description;

    /**
     * @example draft-rbvg5wzljzjhc9ks92
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example Pipeline Draft Name
     *
     * @var string
     */
    public $name;

    /**
     * @example {"mlflow":{"experimentId":"exp-1"}}
     *
     * @var string
     */
    public $options;

    /**
     * @example DD405810-73C9-5721-996A-EA04BCC4BBF2
     *
     * @var string
     */
    public $requestId;

    /**
     * @example PaiStudio
     *
     * @var string
     */
    public $source;

    /**
     * @example 12
     *
     * @var int
     */
    public $version;

    /**
     * @example 23487
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'   => 'Accessibility',
        'content'         => 'Content',
        'creator'         => 'Creator',
        'description'     => 'Description',
        'experimentId'    => 'ExperimentId',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name'            => 'Name',
        'options'         => 'Options',
        'requestId'       => 'RequestId',
        'source'          => 'Source',
        'version'         => 'Version',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExperimentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
