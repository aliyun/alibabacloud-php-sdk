<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class SearchPunishRecordsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $actionCodesShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bussinessCodes;

    /**
     * @var string
     */
    public $caseCodesShrink;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventCodesShrink;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $punishStatusShrink;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $sourceCodesShrink;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $urlFuzzy;
    protected $_name = [
        'actionCodesShrink'  => 'ActionCodes',
        'aliUid'             => 'AliUid',
        'bussinessCodes'     => 'BussinessCodes',
        'caseCodesShrink'    => 'CaseCodes',
        'domain'             => 'Domain',
        'endTime'            => 'EndTime',
        'eventCodesShrink'   => 'EventCodes',
        'ip'                 => 'Ip',
        'page'               => 'Page',
        'pageSize'           => 'PageSize',
        'punishStatusShrink' => 'PunishStatus',
        'resourceId'         => 'ResourceId',
        'sourceCodesShrink'  => 'SourceCodes',
        'startTime'          => 'StartTime',
        'url'                => 'Url',
        'urlFuzzy'           => 'UrlFuzzy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCodesShrink) {
            $res['ActionCodes'] = $this->actionCodesShrink;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bussinessCodes) {
            $res['BussinessCodes'] = $this->bussinessCodes;
        }
        if (null !== $this->caseCodesShrink) {
            $res['CaseCodes'] = $this->caseCodesShrink;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventCodesShrink) {
            $res['EventCodes'] = $this->eventCodesShrink;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->punishStatusShrink) {
            $res['PunishStatus'] = $this->punishStatusShrink;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->sourceCodesShrink) {
            $res['SourceCodes'] = $this->sourceCodesShrink;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->urlFuzzy) {
            $res['UrlFuzzy'] = $this->urlFuzzy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPunishRecordsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCodes'])) {
            $model->actionCodesShrink = $map['ActionCodes'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BussinessCodes'])) {
            $model->bussinessCodes = $map['BussinessCodes'];
        }
        if (isset($map['CaseCodes'])) {
            $model->caseCodesShrink = $map['CaseCodes'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventCodes'])) {
            $model->eventCodesShrink = $map['EventCodes'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PunishStatus'])) {
            $model->punishStatusShrink = $map['PunishStatus'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SourceCodes'])) {
            $model->sourceCodesShrink = $map['SourceCodes'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UrlFuzzy'])) {
            $model->urlFuzzy = $map['UrlFuzzy'];
        }

        return $model;
    }
}
