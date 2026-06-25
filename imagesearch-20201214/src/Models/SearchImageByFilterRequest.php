<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;

class SearchImageByFilterRequest extends Model
{
    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $num;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'filter' => 'Filter',
        'instanceName' => 'InstanceName',
        'num' => 'Num',
        'start' => 'Start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
