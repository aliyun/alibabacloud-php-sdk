<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class TimePeriod extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $timePeriodDescription;

    /**
     * @var string
     */
    public $timePeriodId;

    /**
     * @var string
     */
    public $timePeriodName;
    protected $_name = [
        'cronExpression'        => 'CronExpression',
        'gmtCreate'             => 'GmtCreate',
        'gmtModified'           => 'GmtModified',
        'source'                => 'Source',
        'timePeriodDescription' => 'TimePeriodDescription',
        'timePeriodId'          => 'TimePeriodId',
        'timePeriodName'        => 'TimePeriodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->timePeriodDescription) {
            $res['TimePeriodDescription'] = $this->timePeriodDescription;
        }
        if (null !== $this->timePeriodId) {
            $res['TimePeriodId'] = $this->timePeriodId;
        }
        if (null !== $this->timePeriodName) {
            $res['TimePeriodName'] = $this->timePeriodName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TimePeriod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TimePeriodDescription'])) {
            $model->timePeriodDescription = $map['TimePeriodDescription'];
        }
        if (isset($map['TimePeriodId'])) {
            $model->timePeriodId = $map['TimePeriodId'];
        }
        if (isset($map['TimePeriodName'])) {
            $model->timePeriodName = $map['TimePeriodName'];
        }

        return $model;
    }
}
