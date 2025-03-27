<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecEventsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $allCnt;

    /**
     * @var string
     */
    public $apiFormat;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiTag;

    /**
     * @var string
     */
    public $attackClient;

    /**
     * @var string
     */
    public $attackCntInfo;

    /**
     * @var string
     */
    public $attackIp;

    /**
     * @var string
     */
    public $attackIpInfo;

    /**
     * @var string[]
     */
    public $attackIps;

    /**
     * @var int
     */
    public $endTs;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventInfo;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventTag;

    /**
     * @var int
     */
    public $follow;

    /**
     * @var string
     */
    public $matchedHost;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $remoteCountry;

    /**
     * @var string
     */
    public $remoteRegion;

    /**
     * @var string
     */
    public $requestData;

    /**
     * @var string
     */
    public $responseData;

    /**
     * @var int
     */
    public $startTs;

    /**
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'allCnt' => 'AllCnt',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiTag' => 'ApiTag',
        'attackClient' => 'AttackClient',
        'attackCntInfo' => 'AttackCntInfo',
        'attackIp' => 'AttackIp',
        'attackIpInfo' => 'AttackIpInfo',
        'attackIps' => 'AttackIps',
        'endTs' => 'EndTs',
        'eventId' => 'EventId',
        'eventInfo' => 'EventInfo',
        'eventLevel' => 'EventLevel',
        'eventTag' => 'EventTag',
        'follow' => 'Follow',
        'matchedHost' => 'MatchedHost',
        'note' => 'Note',
        'origin' => 'Origin',
        'remoteCountry' => 'RemoteCountry',
        'remoteRegion' => 'RemoteRegion',
        'requestData' => 'RequestData',
        'responseData' => 'ResponseData',
        'startTs' => 'StartTs',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        if (\is_array($this->attackIps)) {
            Model::validateArray($this->attackIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allCnt) {
            $res['AllCnt'] = $this->allCnt;
        }

        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }

        if (null !== $this->attackClient) {
            $res['AttackClient'] = $this->attackClient;
        }

        if (null !== $this->attackCntInfo) {
            $res['AttackCntInfo'] = $this->attackCntInfo;
        }

        if (null !== $this->attackIp) {
            $res['AttackIp'] = $this->attackIp;
        }

        if (null !== $this->attackIpInfo) {
            $res['AttackIpInfo'] = $this->attackIpInfo;
        }

        if (null !== $this->attackIps) {
            if (\is_array($this->attackIps)) {
                $res['AttackIps'] = [];
                $n1 = 0;
                foreach ($this->attackIps as $item1) {
                    $res['AttackIps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventInfo) {
            $res['EventInfo'] = $this->eventInfo;
        }

        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }

        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
        }

        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }

        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->remoteCountry) {
            $res['RemoteCountry'] = $this->remoteCountry;
        }

        if (null !== $this->remoteRegion) {
            $res['RemoteRegion'] = $this->remoteRegion;
        }

        if (null !== $this->requestData) {
            $res['RequestData'] = $this->requestData;
        }

        if (null !== $this->responseData) {
            $res['ResponseData'] = $this->responseData;
        }

        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['AllCnt'])) {
            $model->allCnt = $map['AllCnt'];
        }

        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }

        if (isset($map['AttackClient'])) {
            $model->attackClient = $map['AttackClient'];
        }

        if (isset($map['AttackCntInfo'])) {
            $model->attackCntInfo = $map['AttackCntInfo'];
        }

        if (isset($map['AttackIp'])) {
            $model->attackIp = $map['AttackIp'];
        }

        if (isset($map['AttackIpInfo'])) {
            $model->attackIpInfo = $map['AttackIpInfo'];
        }

        if (isset($map['AttackIps'])) {
            if (!empty($map['AttackIps'])) {
                $model->attackIps = [];
                $n1 = 0;
                foreach ($map['AttackIps'] as $item1) {
                    $model->attackIps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventInfo'])) {
            $model->eventInfo = $map['EventInfo'];
        }

        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }

        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
        }

        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }

        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['RemoteCountry'])) {
            $model->remoteCountry = $map['RemoteCountry'];
        }

        if (isset($map['RemoteRegion'])) {
            $model->remoteRegion = $map['RemoteRegion'];
        }

        if (isset($map['RequestData'])) {
            $model->requestData = $map['RequestData'];
        }

        if (isset($map['ResponseData'])) {
            $model->responseData = $map['ResponseData'];
        }

        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
