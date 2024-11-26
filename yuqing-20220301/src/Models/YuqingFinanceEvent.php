<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class YuqingFinanceEvent extends Model
{
    /**
     * @var float
     */
    public $comprehensiveRisk;

    /**
     * @var string
     */
    public $entityArea;

    /**
     * @var string
     */
    public $entityCrn;

    /**
     * @var float
     */
    public $entityEmotionScore;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var float
     */
    public $entityRelevanceScore;

    /**
     * @var string
     */
    public $entityShowName;

    /**
     * @var string
     */
    public $entitySummary;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int
     */
    public $eventLevel3Code;

    /**
     * @var string
     */
    public $eventLevel3Name;

    /**
     * @var string
     */
    public $eventTags;

    /**
     * @var int
     */
    public $eventTime;

    /**
     * @var string
     */
    public $securityAbbreviation;

    /**
     * @var string[]
     */
    public $securityCategoryCodes;

    /**
     * @var string[]
     */
    public $securityCodes;

    /**
     * @var string[]
     */
    public $securityMarketsCodes;

    /**
     * @var float
     */
    public $spamScore;

    /**
     * @var string[]
     */
    public $userSubscribeEntityTags;

    /**
     * @var int[]
     */
    public $userSubscribeEventTags;
    protected $_name = [
        'comprehensiveRisk'       => 'comprehensiveRisk',
        'entityArea'              => 'entityArea',
        'entityCrn'               => 'entityCrn',
        'entityEmotionScore'      => 'entityEmotionScore',
        'entityId'                => 'entityId',
        'entityName'              => 'entityName',
        'entityRelevanceScore'    => 'entityRelevanceScore',
        'entityShowName'          => 'entityShowName',
        'entitySummary'           => 'entitySummary',
        'entityType'              => 'entityType',
        'eventId'                 => 'eventId',
        'eventLevel3Code'         => 'eventLevel3Code',
        'eventLevel3Name'         => 'eventLevel3Name',
        'eventTags'               => 'eventTags',
        'eventTime'               => 'eventTime',
        'securityAbbreviation'    => 'securityAbbreviation',
        'securityCategoryCodes'   => 'securityCategoryCodes',
        'securityCodes'           => 'securityCodes',
        'securityMarketsCodes'    => 'securityMarketsCodes',
        'spamScore'               => 'spamScore',
        'userSubscribeEntityTags' => 'userSubscribeEntityTags',
        'userSubscribeEventTags'  => 'userSubscribeEventTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comprehensiveRisk) {
            $res['comprehensiveRisk'] = $this->comprehensiveRisk;
        }
        if (null !== $this->entityArea) {
            $res['entityArea'] = $this->entityArea;
        }
        if (null !== $this->entityCrn) {
            $res['entityCrn'] = $this->entityCrn;
        }
        if (null !== $this->entityEmotionScore) {
            $res['entityEmotionScore'] = $this->entityEmotionScore;
        }
        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['entityName'] = $this->entityName;
        }
        if (null !== $this->entityRelevanceScore) {
            $res['entityRelevanceScore'] = $this->entityRelevanceScore;
        }
        if (null !== $this->entityShowName) {
            $res['entityShowName'] = $this->entityShowName;
        }
        if (null !== $this->entitySummary) {
            $res['entitySummary'] = $this->entitySummary;
        }
        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->eventLevel3Code) {
            $res['eventLevel3Code'] = $this->eventLevel3Code;
        }
        if (null !== $this->eventLevel3Name) {
            $res['eventLevel3Name'] = $this->eventLevel3Name;
        }
        if (null !== $this->eventTags) {
            $res['eventTags'] = $this->eventTags;
        }
        if (null !== $this->eventTime) {
            $res['eventTime'] = $this->eventTime;
        }
        if (null !== $this->securityAbbreviation) {
            $res['securityAbbreviation'] = $this->securityAbbreviation;
        }
        if (null !== $this->securityCategoryCodes) {
            $res['securityCategoryCodes'] = $this->securityCategoryCodes;
        }
        if (null !== $this->securityCodes) {
            $res['securityCodes'] = $this->securityCodes;
        }
        if (null !== $this->securityMarketsCodes) {
            $res['securityMarketsCodes'] = $this->securityMarketsCodes;
        }
        if (null !== $this->spamScore) {
            $res['spamScore'] = $this->spamScore;
        }
        if (null !== $this->userSubscribeEntityTags) {
            $res['userSubscribeEntityTags'] = $this->userSubscribeEntityTags;
        }
        if (null !== $this->userSubscribeEventTags) {
            $res['userSubscribeEventTags'] = $this->userSubscribeEventTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return YuqingFinanceEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comprehensiveRisk'])) {
            $model->comprehensiveRisk = $map['comprehensiveRisk'];
        }
        if (isset($map['entityArea'])) {
            $model->entityArea = $map['entityArea'];
        }
        if (isset($map['entityCrn'])) {
            $model->entityCrn = $map['entityCrn'];
        }
        if (isset($map['entityEmotionScore'])) {
            $model->entityEmotionScore = $map['entityEmotionScore'];
        }
        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }
        if (isset($map['entityName'])) {
            $model->entityName = $map['entityName'];
        }
        if (isset($map['entityRelevanceScore'])) {
            $model->entityRelevanceScore = $map['entityRelevanceScore'];
        }
        if (isset($map['entityShowName'])) {
            $model->entityShowName = $map['entityShowName'];
        }
        if (isset($map['entitySummary'])) {
            $model->entitySummary = $map['entitySummary'];
        }
        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['eventLevel3Code'])) {
            $model->eventLevel3Code = $map['eventLevel3Code'];
        }
        if (isset($map['eventLevel3Name'])) {
            $model->eventLevel3Name = $map['eventLevel3Name'];
        }
        if (isset($map['eventTags'])) {
            $model->eventTags = $map['eventTags'];
        }
        if (isset($map['eventTime'])) {
            $model->eventTime = $map['eventTime'];
        }
        if (isset($map['securityAbbreviation'])) {
            $model->securityAbbreviation = $map['securityAbbreviation'];
        }
        if (isset($map['securityCategoryCodes'])) {
            if (!empty($map['securityCategoryCodes'])) {
                $model->securityCategoryCodes = $map['securityCategoryCodes'];
            }
        }
        if (isset($map['securityCodes'])) {
            if (!empty($map['securityCodes'])) {
                $model->securityCodes = $map['securityCodes'];
            }
        }
        if (isset($map['securityMarketsCodes'])) {
            if (!empty($map['securityMarketsCodes'])) {
                $model->securityMarketsCodes = $map['securityMarketsCodes'];
            }
        }
        if (isset($map['spamScore'])) {
            $model->spamScore = $map['spamScore'];
        }
        if (isset($map['userSubscribeEntityTags'])) {
            if (!empty($map['userSubscribeEntityTags'])) {
                $model->userSubscribeEntityTags = $map['userSubscribeEntityTags'];
            }
        }
        if (isset($map['userSubscribeEventTags'])) {
            if (!empty($map['userSubscribeEventTags'])) {
                $model->userSubscribeEventTags = $map['userSubscribeEventTags'];
            }
        }

        return $model;
    }
}
