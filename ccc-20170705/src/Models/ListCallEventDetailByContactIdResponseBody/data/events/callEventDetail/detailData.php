<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events\callEventDetail;

use AlibabaCloud\Tea\Model;

class detailData extends Model
{
    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $hangUper;

    /**
     * @var string
     */
    public $helper;

    /**
     * @var string
     */
    public $satisfactionalResearch;

    /**
     * @var string
     */
    public $skillGroup;
    protected $_name = [
        'eventType'              => 'EventType',
        'hangUper'               => 'HangUper',
        'helper'                 => 'Helper',
        'satisfactionalResearch' => 'SatisfactionalResearch',
        'skillGroup'             => 'SkillGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->hangUper) {
            $res['HangUper'] = $this->hangUper;
        }
        if (null !== $this->helper) {
            $res['Helper'] = $this->helper;
        }
        if (null !== $this->satisfactionalResearch) {
            $res['SatisfactionalResearch'] = $this->satisfactionalResearch;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
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
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['HangUper'])) {
            $model->hangUper = $map['HangUper'];
        }
        if (isset($map['Helper'])) {
            $model->helper = $map['Helper'];
        }
        if (isset($map['SatisfactionalResearch'])) {
            $model->satisfactionalResearch = $map['SatisfactionalResearch'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }

        return $model;
    }
}
