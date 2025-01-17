<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListAgentlessRelateMaliciousRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $eventId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'eventId'     => 'EventId',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'scenario'    => 'Scenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}
