<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneResponseBody\captures;
use AlibabaCloud\Tea\Model;

class DetailSceneResponseBody extends Model
{
    /**
     * @var captures[]
     */
    public $captures;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $previewToken;

    /**
     * @var bool
     */
    public $published;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sourceNum;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var int
     */
    public $subSceneNum;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'captures'     => 'Captures',
        'code'         => 'Code',
        'coverUrl'     => 'CoverUrl',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'message'      => 'Message',
        'name'         => 'Name',
        'previewToken' => 'PreviewToken',
        'published'    => 'Published',
        'requestId'    => 'RequestId',
        'sourceNum'    => 'SourceNum',
        'status'       => 'Status',
        'statusName'   => 'StatusName',
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
        if (null !== $this->captures) {
            $res['Captures'] = [];
            if (null !== $this->captures && \is_array($this->captures)) {
                $n = 0;
                foreach ($this->captures as $item) {
                    $res['Captures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
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
        if (isset($map['Captures'])) {
            if (!empty($map['Captures'])) {
                $model->captures = [];
                $n               = 0;
                foreach ($map['Captures'] as $item) {
                    $model->captures[$n++] = null !== $item ? captures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
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
