<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class HandleSimilarMaliciousFilesRequest extends Model
{
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
    public $operation;

    /**
     * @var string
     */
    public $scanRange;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'eventId' => 'EventId',
        'lang' => 'Lang',
        'operation' => 'Operation',
        'scanRange' => 'ScanRange',
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
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
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['ScanRange'])) {
            $model->scanRange = $map['ScanRange'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}
