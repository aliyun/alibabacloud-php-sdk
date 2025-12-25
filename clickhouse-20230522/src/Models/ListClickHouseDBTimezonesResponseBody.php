<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ListClickHouseDBTimezonesResponseBody\timeZones;

class ListClickHouseDBTimezonesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeZones[]
     */
    public $timeZones;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeZones' => 'TimeZones',
    ];

    public function validate()
    {
        if (\is_array($this->timeZones)) {
            Model::validateArray($this->timeZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timeZones) {
            if (\is_array($this->timeZones)) {
                $res['TimeZones'] = [];
                $n1 = 0;
                foreach ($this->timeZones as $item1) {
                    $res['TimeZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TimeZones'])) {
            if (!empty($map['TimeZones'])) {
                $model->timeZones = [];
                $n1 = 0;
                foreach ($map['TimeZones'] as $item1) {
                    $model->timeZones[$n1] = timeZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
