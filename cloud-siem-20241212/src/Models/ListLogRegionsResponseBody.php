<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListLogRegionsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $logRegions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logRegions' => 'LogRegions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->logRegions)) {
            Model::validateArray($this->logRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logRegions) {
            if (\is_array($this->logRegions)) {
                $res['LogRegions'] = [];
                $n1 = 0;
                foreach ($this->logRegions as $item1) {
                    $res['LogRegions'][$n1] = $item1;
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
        if (isset($map['LogRegions'])) {
            if (!empty($map['LogRegions'])) {
                $model->logRegions = [];
                $n1 = 0;
                foreach ($map['LogRegions'] as $item1) {
                    $model->logRegions[$n1] = $item1;
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
