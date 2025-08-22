<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetRetcodeDataByQueryRequest extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'pid' => 'Pid',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'to' => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
