<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyScaDetailRequest extends Model
{
    /**
     * @var string
     */
    public $biz;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $processStartedEnd;

    /**
     * @var int
     */
    public $processStartedStart;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $scaName;

    /**
     * @var string
     */
    public $scaNamePattern;

    /**
     * @var string
     */
    public $scaVersion;

    /**
     * @var string
     */
    public $searchInfo;

    /**
     * @var string
     */
    public $searchInfoSub;

    /**
     * @var string
     */
    public $searchItem;

    /**
     * @var string
     */
    public $searchItemSub;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'biz'                 => 'Biz',
        'bizType'             => 'BizType',
        'currentPage'         => 'CurrentPage',
        'lang'                => 'Lang',
        'name'                => 'Name',
        'pageSize'            => 'PageSize',
        'pid'                 => 'Pid',
        'port'                => 'Port',
        'processStartedEnd'   => 'ProcessStartedEnd',
        'processStartedStart' => 'ProcessStartedStart',
        'remark'              => 'Remark',
        'scaName'             => 'ScaName',
        'scaNamePattern'      => 'ScaNamePattern',
        'scaVersion'          => 'ScaVersion',
        'searchInfo'          => 'SearchInfo',
        'searchInfoSub'       => 'SearchInfoSub',
        'searchItem'          => 'SearchItem',
        'searchItemSub'       => 'SearchItemSub',
        'user'                => 'User',
        'uuid'                => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->processStartedEnd) {
            $res['ProcessStartedEnd'] = $this->processStartedEnd;
        }
        if (null !== $this->processStartedStart) {
            $res['ProcessStartedStart'] = $this->processStartedStart;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scaName) {
            $res['ScaName'] = $this->scaName;
        }
        if (null !== $this->scaNamePattern) {
            $res['ScaNamePattern'] = $this->scaNamePattern;
        }
        if (null !== $this->scaVersion) {
            $res['ScaVersion'] = $this->scaVersion;
        }
        if (null !== $this->searchInfo) {
            $res['SearchInfo'] = $this->searchInfo;
        }
        if (null !== $this->searchInfoSub) {
            $res['SearchInfoSub'] = $this->searchInfoSub;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }
        if (null !== $this->searchItemSub) {
            $res['SearchItemSub'] = $this->searchItemSub;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyScaDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProcessStartedEnd'])) {
            $model->processStartedEnd = $map['ProcessStartedEnd'];
        }
        if (isset($map['ProcessStartedStart'])) {
            $model->processStartedStart = $map['ProcessStartedStart'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScaName'])) {
            $model->scaName = $map['ScaName'];
        }
        if (isset($map['ScaNamePattern'])) {
            $model->scaNamePattern = $map['ScaNamePattern'];
        }
        if (isset($map['ScaVersion'])) {
            $model->scaVersion = $map['ScaVersion'];
        }
        if (isset($map['SearchInfo'])) {
            $model->searchInfo = $map['SearchInfo'];
        }
        if (isset($map['SearchInfoSub'])) {
            $model->searchInfoSub = $map['SearchInfoSub'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }
        if (isset($map['SearchItemSub'])) {
            $model->searchItemSub = $map['SearchItemSub'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
