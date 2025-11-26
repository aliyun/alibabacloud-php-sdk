<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList;

class SaveAnnotationMissionSessionListRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $annotationMissionDataSourceType;

    /**
     * @var annotationMissionSessionList[]
     */
    public $annotationMissionSessionList;

    /**
     * @var string
     */
    public $annotationMissionSessionListJsonString;

    /**
     * @var int
     */
    public $environment;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentKey' => 'AgentKey',
        'annotationMissionDataSourceType' => 'AnnotationMissionDataSourceType',
        'annotationMissionSessionList' => 'AnnotationMissionSessionList',
        'annotationMissionSessionListJsonString' => 'AnnotationMissionSessionListJsonString',
        'environment' => 'Environment',
        'userNick' => 'UserNick',
    ];

    public function validate()
    {
        if (\is_array($this->annotationMissionSessionList)) {
            Model::validateArray($this->annotationMissionSessionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->annotationMissionDataSourceType) {
            $res['AnnotationMissionDataSourceType'] = $this->annotationMissionDataSourceType;
        }

        if (null !== $this->annotationMissionSessionList) {
            if (\is_array($this->annotationMissionSessionList)) {
                $res['AnnotationMissionSessionList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionSessionList as $item1) {
                    $res['AnnotationMissionSessionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->annotationMissionSessionListJsonString) {
            $res['AnnotationMissionSessionListJsonString'] = $this->annotationMissionSessionListJsonString;
        }

        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }

        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['AnnotationMissionDataSourceType'])) {
            $model->annotationMissionDataSourceType = $map['AnnotationMissionDataSourceType'];
        }

        if (isset($map['AnnotationMissionSessionList'])) {
            if (!empty($map['AnnotationMissionSessionList'])) {
                $model->annotationMissionSessionList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionSessionList'] as $item1) {
                    $model->annotationMissionSessionList[$n1] = annotationMissionSessionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AnnotationMissionSessionListJsonString'])) {
            $model->annotationMissionSessionListJsonString = $map['AnnotationMissionSessionListJsonString'];
        }

        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
