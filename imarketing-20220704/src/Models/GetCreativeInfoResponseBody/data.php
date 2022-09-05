<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetCreativeInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountNo;

    /**
     * @var string
     */
    public $chainValue;

    /**
     * @var string
     */
    public $componentIdList;

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
    public $pageId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskCount;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $urlType;
    protected $_name = [
        'accountNo'       => 'AccountNo',
        'chainValue'      => 'ChainValue',
        'componentIdList' => 'ComponentIdList',
        'id'              => 'Id',
        'mainId'          => 'MainId',
        'name'            => 'Name',
        'pageId'          => 'PageId',
        'status'          => 'Status',
        'taskCount'       => 'TaskCount',
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
        if (null !== $this->chainValue) {
            $res['ChainValue'] = $this->chainValue;
        }
        if (null !== $this->componentIdList) {
            $res['ComponentIdList'] = $this->componentIdList;
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
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['ChainValue'])) {
            $model->chainValue = $map['ChainValue'];
        }
        if (isset($map['ComponentIdList'])) {
            $model->componentIdList = $map['ComponentIdList'];
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
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
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
