<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostBaseInfoByInstanceResponseBody\hostInstanceConsoleInfos;

class QueryHostBaseInfoByInstanceResponseBody extends Model
{
    /**
     * @var hostInstanceConsoleInfos[]
     */
    public $hostInstanceConsoleInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostInstanceConsoleInfos' => 'HostInstanceConsoleInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->hostInstanceConsoleInfos)) {
            Model::validateArray($this->hostInstanceConsoleInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostInstanceConsoleInfos) {
            if (\is_array($this->hostInstanceConsoleInfos)) {
                $res['HostInstanceConsoleInfos'] = [];
                $n1 = 0;
                foreach ($this->hostInstanceConsoleInfos as $item1) {
                    $res['HostInstanceConsoleInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HostInstanceConsoleInfos'])) {
            if (!empty($map['HostInstanceConsoleInfos'])) {
                $model->hostInstanceConsoleInfos = [];
                $n1 = 0;
                foreach ($map['HostInstanceConsoleInfos'] as $item1) {
                    $model->hostInstanceConsoleInfos[$n1++] = hostInstanceConsoleInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
