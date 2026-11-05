<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLakebaseMountParameterGroupChangeLogsResponseBody\changeLogs;

class DescribeLakebaseMountParameterGroupChangeLogsResponseBody extends Model
{
    /**
     * @var changeLogs[]
     */
    public $changeLogs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changeLogs' => 'ChangeLogs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->changeLogs)) {
            Model::validateArray($this->changeLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeLogs) {
            if (\is_array($this->changeLogs)) {
                $res['ChangeLogs'] = [];
                $n1 = 0;
                foreach ($this->changeLogs as $item1) {
                    $res['ChangeLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChangeLogs'])) {
            if (!empty($map['ChangeLogs'])) {
                $model->changeLogs = [];
                $n1 = 0;
                foreach ($map['ChangeLogs'] as $item1) {
                    $model->changeLogs[$n1] = changeLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
