<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class SyncInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountNo;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $chainValue;

    /**
     * @var string
     */
    public $componentIdList;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $mainId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextChainValue;

    /**
     * @var string
     */
    public $ossFileUrl;

    /**
     * @var string
     */
    public $pageId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $updateUser;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $urlType;
    protected $_name = [
        'accountNo'       => 'AccountNo',
        'bizId'           => 'BizId',
        'chainValue'      => 'ChainValue',
        'componentIdList' => 'ComponentIdList',
        'createUser'      => 'CreateUser',
        'id'              => 'Id',
        'mainId'          => 'MainId',
        'name'            => 'Name',
        'nextChainValue'  => 'NextChainValue',
        'ossFileUrl'      => 'OssFileUrl',
        'pageId'          => 'PageId',
        'status'          => 'Status',
        'updateUser'      => 'UpdateUser',
        'url'             => 'Url',
        'urlType'         => 'UrlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->chainValue) {
            $res['ChainValue'] = $this->chainValue;
        }
        if (null !== $this->componentIdList) {
            $res['ComponentIdList'] = $this->componentIdList;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mainId) {
            $res['MainId'] = $this->mainId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextChainValue) {
            $res['NextChainValue'] = $this->nextChainValue;
        }
        if (null !== $this->ossFileUrl) {
            $res['OssFileUrl'] = $this->ossFileUrl;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->urlType) {
            $res['UrlType'] = $this->urlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ChainValue'])) {
            $model->chainValue = $map['ChainValue'];
        }
        if (isset($map['ComponentIdList'])) {
            $model->componentIdList = $map['ComponentIdList'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MainId'])) {
            $model->mainId = $map['MainId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextChainValue'])) {
            $model->nextChainValue = $map['NextChainValue'];
        }
        if (isset($map['OssFileUrl'])) {
            $model->ossFileUrl = $map['OssFileUrl'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UrlType'])) {
            $model->urlType = $map['UrlType'];
        }

        return $model;
    }
}
