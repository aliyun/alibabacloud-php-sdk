<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedInfoRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $csharpDemo;

    /**
     * @var string
     */
    public $curlDemo;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $javaDemo;

    /**
     * @var string
     */
    public $objectcDemo;

    /**
     * @var string
     */
    public $phpDemo;

    /**
     * @var string
     */
    public $pythonDemo;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiName'       => 'ApiName',
        'csharpDemo'    => 'CsharpDemo',
        'curlDemo'      => 'CurlDemo',
        'groupId'       => 'GroupId',
        'javaDemo'      => 'JavaDemo',
        'objectcDemo'   => 'ObjectcDemo',
        'phpDemo'       => 'PhpDemo',
        'pythonDemo'    => 'PythonDemo',
        'securityToken' => 'SecurityToken',
        'stageId'       => 'StageId',
        'stageName'     => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->csharpDemo) {
            $res['CsharpDemo'] = $this->csharpDemo;
        }
        if (null !== $this->curlDemo) {
            $res['CurlDemo'] = $this->curlDemo;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->javaDemo) {
            $res['JavaDemo'] = $this->javaDemo;
        }
        if (null !== $this->objectcDemo) {
            $res['ObjectcDemo'] = $this->objectcDemo;
        }
        if (null !== $this->phpDemo) {
            $res['PhpDemo'] = $this->phpDemo;
        }
        if (null !== $this->pythonDemo) {
            $res['PythonDemo'] = $this->pythonDemo;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomizedInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['CsharpDemo'])) {
            $model->csharpDemo = $map['CsharpDemo'];
        }
        if (isset($map['CurlDemo'])) {
            $model->curlDemo = $map['CurlDemo'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JavaDemo'])) {
            $model->javaDemo = $map['JavaDemo'];
        }
        if (isset($map['ObjectcDemo'])) {
            $model->objectcDemo = $map['ObjectcDemo'];
        }
        if (isset($map['PhpDemo'])) {
            $model->phpDemo = $map['PhpDemo'];
        }
        if (isset($map['PythonDemo'])) {
            $model->pythonDemo = $map['PythonDemo'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
