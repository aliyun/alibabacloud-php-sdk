<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEventResponseBody\attackSources;

class DescribeAiEngineEventResponseBody extends Model
{
    /**
     * @var attackSources[]
     */
    public $attackSources;

    /**
     * @var int
     */
    public $bypassRequestCount;

    /**
     * @var string[]
     */
    public $domains;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $eventNodeCount;

    /**
     * @var string
     */
    public $eventSummary;

    /**
     * @var int
     */
    public $evidenceRequestCount;

    /**
     * @var int
     */
    public $firstSeenAt;

    /**
     * @var string
     */
    public $handleStatus;

    /**
     * @var int
     */
    public $lastSeenAt;

    /**
     * @var string
     */
    public $relatedEventIds;

    /**
     * @var string
     */
    public $reportMarkdown;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $resources;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'attackSources' => 'AttackSources',
        'bypassRequestCount' => 'BypassRequestCount',
        'domains' => 'Domains',
        'eventId' => 'EventId',
        'eventName' => 'EventName',
        'eventNodeCount' => 'EventNodeCount',
        'eventSummary' => 'EventSummary',
        'evidenceRequestCount' => 'EvidenceRequestCount',
        'firstSeenAt' => 'FirstSeenAt',
        'handleStatus' => 'HandleStatus',
        'lastSeenAt' => 'LastSeenAt',
        'relatedEventIds' => 'RelatedEventIds',
        'reportMarkdown' => 'ReportMarkdown',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->attackSources)) {
            Model::validateArray($this->attackSources);
        }
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackSources) {
            if (\is_array($this->attackSources)) {
                $res['AttackSources'] = [];
                $n1 = 0;
                foreach ($this->attackSources as $item1) {
                    $res['AttackSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bypassRequestCount) {
            $res['BypassRequestCount'] = $this->bypassRequestCount;
        }

        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventNodeCount) {
            $res['EventNodeCount'] = $this->eventNodeCount;
        }

        if (null !== $this->eventSummary) {
            $res['EventSummary'] = $this->eventSummary;
        }

        if (null !== $this->evidenceRequestCount) {
            $res['EvidenceRequestCount'] = $this->evidenceRequestCount;
        }

        if (null !== $this->firstSeenAt) {
            $res['FirstSeenAt'] = $this->firstSeenAt;
        }

        if (null !== $this->handleStatus) {
            $res['HandleStatus'] = $this->handleStatus;
        }

        if (null !== $this->lastSeenAt) {
            $res['LastSeenAt'] = $this->lastSeenAt;
        }

        if (null !== $this->relatedEventIds) {
            $res['RelatedEventIds'] = $this->relatedEventIds;
        }

        if (null !== $this->reportMarkdown) {
            $res['ReportMarkdown'] = $this->reportMarkdown;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['AttackSources'])) {
            if (!empty($map['AttackSources'])) {
                $model->attackSources = [];
                $n1 = 0;
                foreach ($map['AttackSources'] as $item1) {
                    $model->attackSources[$n1] = attackSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BypassRequestCount'])) {
            $model->bypassRequestCount = $map['BypassRequestCount'];
        }

        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventNodeCount'])) {
            $model->eventNodeCount = $map['EventNodeCount'];
        }

        if (isset($map['EventSummary'])) {
            $model->eventSummary = $map['EventSummary'];
        }

        if (isset($map['EvidenceRequestCount'])) {
            $model->evidenceRequestCount = $map['EvidenceRequestCount'];
        }

        if (isset($map['FirstSeenAt'])) {
            $model->firstSeenAt = $map['FirstSeenAt'];
        }

        if (isset($map['HandleStatus'])) {
            $model->handleStatus = $map['HandleStatus'];
        }

        if (isset($map['LastSeenAt'])) {
            $model->lastSeenAt = $map['LastSeenAt'];
        }

        if (isset($map['RelatedEventIds'])) {
            $model->relatedEventIds = $map['RelatedEventIds'];
        }

        if (isset($map['ReportMarkdown'])) {
            $model->reportMarkdown = $map['ReportMarkdown'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
