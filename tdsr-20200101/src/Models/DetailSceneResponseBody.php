<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DetailSceneResponseBody extends Model
{
    /**
     * @description 返回码
     *
     * @var int
     */
    public $code;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 最后修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 主场景Id
     *
     * @var string
     */
    public $id;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description 场景名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 预览Token
     *
     * @var string
     */
    public $previewToken;

    /**
     * @description 是否已发布 true：已发布：false：未发布
     *
     * @var bool
     */
    public $published;

    /**
     * @description 请求ID，与入参requestId对应
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 资源数
     *
     * @var int
     */
    public $sourceNum;

    /**
     * @description 子场景数
     *
     * @var int
     */
    public $subSceneNum;

    /**
     * @description 是否请求成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 场景类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'         => 'Code',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'message'      => 'Message',
        'name'         => 'Name',
        'previewToken' => 'PreviewToken',
        'published'    => 'Published',
        'requestId'    => 'RequestId',
        'sourceNum'    => 'SourceNum',
        'subSceneNum'  => 'SubSceneNum',
        'success'      => 'Success',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->previewToken) {
            $res['PreviewToken'] = $this->previewToken;
        }
        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceNum) {
            $res['SourceNum'] = $this->sourceNum;
        }
        if (null !== $this->subSceneNum) {
            $res['SubSceneNum'] = $this->subSceneNum;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetailSceneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }
        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceNum'])) {
            $model->sourceNum = $map['SourceNum'];
        }
        if (isset($map['SubSceneNum'])) {
            $model->subSceneNum = $map['SubSceneNum'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
