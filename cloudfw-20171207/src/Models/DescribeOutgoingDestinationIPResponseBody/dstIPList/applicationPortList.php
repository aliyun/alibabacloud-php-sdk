<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList;

use AlibabaCloud\Dara\Model;

class applicationPortList extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string[]
     */
    public $unknownReason;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'port' => 'Port',
        'unknownReason' => 'UnknownReason',
    ];

    public function validate()
    {
        if (\is_array($this->unknownReason)) {
            Model::validateArray($this->unknownReason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->unknownReason) {
            if (\is_array($this->unknownReason)) {
                $res['UnknownReason'] = [];
                $n1 = 0;
                foreach ($this->unknownReason as $item1) {
                    $res['UnknownReason'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['UnknownReason'])) {
            if (!empty($map['UnknownReason'])) {
                $model->unknownReason = [];
                $n1 = 0;
                foreach ($map['UnknownReason'] as $item1) {
                    $model->unknownReason[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
