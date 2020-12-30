<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events\callEventDetail;

use AlibabaCloud\Tea\Model;

class detailData extends Model
{
    /**
     * @var string
     */
    public $hangUper;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $helper;

    /**
     * @var string
     */
    public $skillGroup;

    /**
     * @var string
     */
    public $satisfactionalResearch;
    protected $_name = [
        'hangUper'               => 'HangUper',
        'eventType'              => 'EventType',
        'helper'                 => 'Helper',
        'skillGroup'             => 'SkillGroup',
        'satisfactionalResearch' => 'SatisfactionalResearch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hangUper) {
            $res['HangUper'] = $this->hangUper;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->helper) {
            $res['Helper'] = $this->helper;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->satisfactionalResearch) {
            $res['SatisfactionalResearch'] = $this->satisfactionalResearch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HangUper'])) {
            $model->hangUper = $map['HangUper'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Helper'])) {
            $model->helper = $map['Helper'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['SatisfactionalResearch'])) {
            $model->satisfactionalResearch = $map['SatisfactionalResearch'];
        }

        return $model;
    }
}
