<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList;
use AlibabaCloud\Tea\Model;

class SaveAnnotationMissionSessionListRequest extends Model
{
    /**
     * @example 1198938
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 9137ab9c27044921860030adf8590ec4_p_outbound_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $annotationMissionDataSourceType;

    /**
     * @var annotationMissionSessionList[]
     */
    public $annotationMissionSessionList;

    /**
     * @example []
     *
     * @var string
     */
    public $annotationMissionSessionListJsonString;

    /**
     * @example 0
     *
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

    public function validate() {}

    public function toMap()
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
            $res['AnnotationMissionSessionList'] = [];
            if (null !== $this->annotationMissionSessionList && \is_array($this->annotationMissionSessionList)) {
                $n = 0;
                foreach ($this->annotationMissionSessionList as $item) {
                    $res['AnnotationMissionSessionList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return SaveAnnotationMissionSessionListRequest
     */
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
                $n = 0;
                foreach ($map['AnnotationMissionSessionList'] as $item) {
                    $model->annotationMissionSessionList[$n++] = null !== $item ? annotationMissionSessionList::fromMap($item) : $item;
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
