<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecApiResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $abnormalNum;

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
    public $apiInfo;

    /**
     * @var string
     */
    public $apiMethod;

    /**
     * @var string
     */
    public $apiSensitive;

    /**
     * @var string
     */
    public $apiSensitiveRequest;

    /**
     * @var string
     */
    public $apiSensitiveResponse;

    /**
     * @var string
     */
    public $apiStatus;

    /**
     * @var string
     */
    public $apiTag;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $authFlag;

    /**
     * @var int
     */
    public $botCnt;

    /**
     * @var int
     */
    public $crossBorderCnt;

    /**
     * @var int
     */
    public $eventNum;

    /**
     * @var string[]
     */
    public $examples;

    /**
     * @var int
     */
    public $farthestTs;

    /**
     * @var int
     */
    public $follow;

    /**
     * @var int
     */
    public $lastestTs;

    /**
     * @var string
     */
    public $matchedHost;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'abnormalNum' => 'AbnormalNum',
        'allCnt' => 'AllCnt',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiInfo' => 'ApiInfo',
        'apiMethod' => 'ApiMethod',
        'apiSensitive' => 'ApiSensitive',
        'apiSensitiveRequest' => 'ApiSensitiveRequest',
        'apiSensitiveResponse' => 'ApiSensitiveResponse',
        'apiStatus' => 'ApiStatus',
        'apiTag' => 'ApiTag',
        'apiType' => 'ApiType',
        'authFlag' => 'AuthFlag',
        'botCnt' => 'BotCnt',
        'crossBorderCnt' => 'CrossBorderCnt',
        'eventNum' => 'EventNum',
        'examples' => 'Examples',
        'farthestTs' => 'FarthestTs',
        'follow' => 'Follow',
        'lastestTs' => 'LastestTs',
        'matchedHost' => 'MatchedHost',
        'note' => 'Note',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        if (\is_array($this->examples)) {
            Model::validateArray($this->examples);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalNum) {
            $res['AbnormalNum'] = $this->abnormalNum;
        }

        if (null !== $this->allCnt) {
            $res['AllCnt'] = $this->allCnt;
        }

        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiInfo) {
            $res['ApiInfo'] = $this->apiInfo;
        }

        if (null !== $this->apiMethod) {
            $res['ApiMethod'] = $this->apiMethod;
        }

        if (null !== $this->apiSensitive) {
            $res['ApiSensitive'] = $this->apiSensitive;
        }

        if (null !== $this->apiSensitiveRequest) {
            $res['ApiSensitiveRequest'] = $this->apiSensitiveRequest;
        }

        if (null !== $this->apiSensitiveResponse) {
            $res['ApiSensitiveResponse'] = $this->apiSensitiveResponse;
        }

        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }

        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }

        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }

        if (null !== $this->authFlag) {
            $res['AuthFlag'] = $this->authFlag;
        }

        if (null !== $this->botCnt) {
            $res['BotCnt'] = $this->botCnt;
        }

        if (null !== $this->crossBorderCnt) {
            $res['CrossBorderCnt'] = $this->crossBorderCnt;
        }

        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
        }

        if (null !== $this->examples) {
            if (\is_array($this->examples)) {
                $res['Examples'] = [];
                $n1 = 0;
                foreach ($this->examples as $item1) {
                    $res['Examples'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->farthestTs) {
            $res['FarthestTs'] = $this->farthestTs;
        }

        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }

        if (null !== $this->lastestTs) {
            $res['LastestTs'] = $this->lastestTs;
        }

        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AbnormalNum'])) {
            $model->abnormalNum = $map['AbnormalNum'];
        }

        if (isset($map['AllCnt'])) {
            $model->allCnt = $map['AllCnt'];
        }

        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiInfo'])) {
            $model->apiInfo = $map['ApiInfo'];
        }

        if (isset($map['ApiMethod'])) {
            $model->apiMethod = $map['ApiMethod'];
        }

        if (isset($map['ApiSensitive'])) {
            $model->apiSensitive = $map['ApiSensitive'];
        }

        if (isset($map['ApiSensitiveRequest'])) {
            $model->apiSensitiveRequest = $map['ApiSensitiveRequest'];
        }

        if (isset($map['ApiSensitiveResponse'])) {
            $model->apiSensitiveResponse = $map['ApiSensitiveResponse'];
        }

        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }

        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }

        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }

        if (isset($map['AuthFlag'])) {
            $model->authFlag = $map['AuthFlag'];
        }

        if (isset($map['BotCnt'])) {
            $model->botCnt = $map['BotCnt'];
        }

        if (isset($map['CrossBorderCnt'])) {
            $model->crossBorderCnt = $map['CrossBorderCnt'];
        }

        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }

        if (isset($map['Examples'])) {
            if (!empty($map['Examples'])) {
                $model->examples = [];
                $n1 = 0;
                foreach ($map['Examples'] as $item1) {
                    $model->examples[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FarthestTs'])) {
            $model->farthestTs = $map['FarthestTs'];
        }

        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }

        if (isset($map['LastestTs'])) {
            $model->lastestTs = $map['LastestTs'];
        }

        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
