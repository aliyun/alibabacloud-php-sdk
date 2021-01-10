<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class PushMessageRequest extends Model
{
    /**
     * @var string
     */
    public $appPackage;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $act;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $pkgContent;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var string
     */
    public $receiverType;

    /**
     * @var string
     */
    public $receiverValues;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'appPackage'     => 'AppPackage',
        'desc'           => 'Desc',
        'act'            => 'Act',
        'uri'            => 'Uri',
        'pkgContent'     => 'PkgContent',
        'customContent'  => 'CustomContent',
        'receiverType'   => 'ReceiverType',
        'receiverValues' => 'ReceiverValues',
        'expiredTime'    => 'ExpiredTime',
        'title'          => 'Title',
        'projectId'      => 'ProjectId',
        'appKey'         => 'AppKey',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appPackage) {
            $res['AppPackage'] = $this->appPackage;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->act) {
            $res['Act'] = $this->act;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->pkgContent) {
            $res['PkgContent'] = $this->pkgContent;
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }
        if (null !== $this->receiverValues) {
            $res['ReceiverValues'] = $this->receiverValues;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppPackage'])) {
            $model->appPackage = $map['AppPackage'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['PkgContent'])) {
            $model->pkgContent = $map['PkgContent'];
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }
        if (isset($map['ReceiverValues'])) {
            $model->receiverValues = $map['ReceiverValues'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
