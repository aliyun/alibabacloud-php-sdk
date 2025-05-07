<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Dara\Model;

class SearchPunishRecordsRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionCodes;

    /**
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
        'actionCodes' => 'ActionCodes',
        'aliUid' => 'AliUid',
        'bussinessCodes' => 'BussinessCodes',
        'caseCodes' => 'CaseCodes',
        'domain' => 'Domain',
        'endTime' => 'EndTime',
        'eventCodes' => 'EventCodes',
        'ip' => 'Ip',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'punishStatus' => 'PunishStatus',
        'resourceId' => 'ResourceId',
        'sourceCodes' => 'SourceCodes',
        'startTime' => 'StartTime',
        'url' => 'Url',
        'urlFuzzy' => 'UrlFuzzy',
    ];

    public function validate()
    {
        if (\is_array($this->actionCodes)) {
            Model::validateArray($this->actionCodes);
        }
        if (\is_array($this->caseCodes)) {
            Model::validateArray($this->caseCodes);
        }
        if (\is_array($this->eventCodes)) {
            Model::validateArray($this->eventCodes);
        }
        if (\is_array($this->punishStatus)) {
            Model::validateArray($this->punishStatus);
        }
        if (\is_array($this->sourceCodes)) {
            Model::validateArray($this->sourceCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionCodes) {
            if (\is_array($this->actionCodes)) {
                $res['ActionCodes'] = [];
                $n1 = 0;
                foreach ($this->actionCodes as $item1) {
                    $res['ActionCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bussinessCodes) {
            $res['BussinessCodes'] = $this->bussinessCodes;
        }

        if (null !== $this->caseCodes) {
            if (\is_array($this->caseCodes)) {
                $res['CaseCodes'] = [];
                $n1 = 0;
                foreach ($this->caseCodes as $item1) {
                    $res['CaseCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventCodes) {
            if (\is_array($this->eventCodes)) {
                $res['EventCodes'] = [];
                $n1 = 0;
                foreach ($this->eventCodes as $item1) {
                    $res['EventCodes'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->punishStatus)) {
                $res['PunishStatus'] = [];
                $n1 = 0;
                foreach ($this->punishStatus as $item1) {
                    $res['PunishStatus'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->sourceCodes) {
            if (\is_array($this->sourceCodes)) {
                $res['SourceCodes'] = [];
                $n1 = 0;
                foreach ($this->sourceCodes as $item1) {
                    $res['SourceCodes'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCodes'])) {
            if (!empty($map['ActionCodes'])) {
                $model->actionCodes = [];
                $n1 = 0;
                foreach ($map['ActionCodes'] as $item1) {
                    $model->actionCodes[$n1++] = $item1;
                }
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
                $model->caseCodes = [];
                $n1 = 0;
                foreach ($map['CaseCodes'] as $item1) {
                    $model->caseCodes[$n1++] = $item1;
                }
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
                $model->eventCodes = [];
                $n1 = 0;
                foreach ($map['EventCodes'] as $item1) {
                    $model->eventCodes[$n1++] = $item1;
                }
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
                $model->punishStatus = [];
                $n1 = 0;
                foreach ($map['PunishStatus'] as $item1) {
                    $model->punishStatus[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['SourceCodes'])) {
            if (!empty($map['SourceCodes'])) {
                $model->sourceCodes = [];
                $n1 = 0;
                foreach ($map['SourceCodes'] as $item1) {
                    $model->sourceCodes[$n1++] = $item1;
                }
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
