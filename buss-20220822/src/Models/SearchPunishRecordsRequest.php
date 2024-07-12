<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class SearchPunishRecordsRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionCodes;

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
     * @var string[]
     */
    public $caseCodes;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $eventCodes;

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
     * @var string[]
     */
    public $punishStatus;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $sourceCodes;

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
        'actionCodes'    => 'ActionCodes',
        'aliUid'         => 'AliUid',
        'bussinessCodes' => 'BussinessCodes',
        'caseCodes'      => 'CaseCodes',
        'domain'         => 'Domain',
        'endTime'        => 'EndTime',
        'eventCodes'     => 'EventCodes',
        'ip'             => 'Ip',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'punishStatus'   => 'PunishStatus',
        'resourceId'     => 'ResourceId',
        'sourceCodes'    => 'SourceCodes',
        'startTime'      => 'StartTime',
        'url'            => 'Url',
        'urlFuzzy'       => 'UrlFuzzy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCodes) {
            $res['ActionCodes'] = $this->actionCodes;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bussinessCodes) {
            $res['BussinessCodes'] = $this->bussinessCodes;
        }
        if (null !== $this->caseCodes) {
            $res['CaseCodes'] = $this->caseCodes;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventCodes) {
            $res['EventCodes'] = $this->eventCodes;
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
        if (null !== $this->punishStatus) {
            $res['PunishStatus'] = $this->punishStatus;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->sourceCodes) {
            $res['SourceCodes'] = $this->sourceCodes;
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
     * @return SearchPunishRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCodes'])) {
            if (!empty($map['ActionCodes'])) {
                $model->actionCodes = $map['ActionCodes'];
            }
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BussinessCodes'])) {
            $model->bussinessCodes = $map['BussinessCodes'];
        }
        if (isset($map['CaseCodes'])) {
            if (!empty($map['CaseCodes'])) {
                $model->caseCodes = $map['CaseCodes'];
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventCodes'])) {
            if (!empty($map['EventCodes'])) {
                $model->eventCodes = $map['EventCodes'];
            }
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
            if (!empty($map['PunishStatus'])) {
                $model->punishStatus = $map['PunishStatus'];
            }
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SourceCodes'])) {
            if (!empty($map['SourceCodes'])) {
                $model->sourceCodes = $map['SourceCodes'];
            }
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
