<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCampaignTrendingReportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $breakAgents;

    /**
     * @example 1
     *
     * @var int
     */
    public $concurrency;

    /**
     * @example 1634037840000
     *
     * @var int
     */
    public $datetime;

    /**
     * @example 2
     *
     * @var int
     */
    public $loggedInAgents;

    /**
     * @example 2
     *
     * @var int
     */
    public $readyAgents;

    /**
     * @example 0
     *
     * @var int
     */
    public $talkAgents;

    /**
     * @example 0
     *
     * @var int
     */
    public $workAgents;
    protected $_name = [
        'breakAgents'    => 'BreakAgents',
        'concurrency'    => 'Concurrency',
        'datetime'       => 'Datetime',
        'loggedInAgents' => 'LoggedInAgents',
        'readyAgents'    => 'ReadyAgents',
        'talkAgents'     => 'TalkAgents',
        'workAgents'     => 'WorkAgents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakAgents) {
            $res['BreakAgents'] = $this->breakAgents;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->datetime) {
            $res['Datetime'] = $this->datetime;
        }
        if (null !== $this->loggedInAgents) {
            $res['LoggedInAgents'] = $this->loggedInAgents;
        }
        if (null !== $this->readyAgents) {
            $res['ReadyAgents'] = $this->readyAgents;
        }
        if (null !== $this->talkAgents) {
            $res['TalkAgents'] = $this->talkAgents;
        }
        if (null !== $this->workAgents) {
            $res['WorkAgents'] = $this->workAgents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BreakAgents'])) {
            $model->breakAgents = $map['BreakAgents'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['Datetime'])) {
            $model->datetime = $map['Datetime'];
        }
        if (isset($map['LoggedInAgents'])) {
            $model->loggedInAgents = $map['LoggedInAgents'];
        }
        if (isset($map['ReadyAgents'])) {
            $model->readyAgents = $map['ReadyAgents'];
        }
        if (isset($map['TalkAgents'])) {
            $model->talkAgents = $map['TalkAgents'];
        }
        if (isset($map['WorkAgents'])) {
            $model->workAgents = $map['WorkAgents'];
        }

        return $model;
    }
}
