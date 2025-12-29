<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest;

use AlibabaCloud\Dara\Model;

class sessionConfig extends Model
{
    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var string
     */
    public $customAgentStage;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $reportWaterMark;
    protected $_name = [
        'customAgentId' => 'CustomAgentId',
        'customAgentStage' => 'CustomAgentStage',
        'language' => 'Language',
        'reportWaterMark' => 'ReportWaterMark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->customAgentStage) {
            $res['CustomAgentStage'] = $this->customAgentStage;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->reportWaterMark) {
            $res['ReportWaterMark'] = $this->reportWaterMark;
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
        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['CustomAgentStage'])) {
            $model->customAgentStage = $map['CustomAgentStage'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ReportWaterMark'])) {
            $model->reportWaterMark = $map['ReportWaterMark'];
        }

        return $model;
    }
}
