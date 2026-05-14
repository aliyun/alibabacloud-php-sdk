<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbResponseBody\data\cdrIb;

use AlibabaCloud\Dara\Model;

class investigation extends Model
{
    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $keys;

    /**
     * @var string
     */
    public $multiKeys;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clientName' => 'ClientName',
        'cno' => 'Cno',
        'endTime' => 'EndTime',
        'keys' => 'Keys',
        'multiKeys' => 'MultiKeys',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }

        if (null !== $this->multiKeys) {
            $res['MultiKeys'] = $this->multiKeys;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Keys'])) {
            $model->keys = $map['Keys'];
        }

        if (isset($map['MultiKeys'])) {
            $model->multiKeys = $map['MultiKeys'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
