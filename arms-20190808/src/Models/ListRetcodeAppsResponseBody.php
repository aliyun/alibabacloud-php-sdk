<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponseBody\retcodeApps;

class ListRetcodeAppsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var retcodeApps[]
     */
    public $retcodeApps;
    protected $_name = [
        'requestId' => 'RequestId',
        'retcodeApps' => 'RetcodeApps',
    ];

    public function validate()
    {
        if (\is_array($this->retcodeApps)) {
            Model::validateArray($this->retcodeApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retcodeApps) {
            if (\is_array($this->retcodeApps)) {
                $res['RetcodeApps'] = [];
                $n1 = 0;
                foreach ($this->retcodeApps as $item1) {
                    $res['RetcodeApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RetcodeApps'])) {
            if (!empty($map['RetcodeApps'])) {
                $model->retcodeApps = [];
                $n1 = 0;
                foreach ($map['RetcodeApps'] as $item1) {
                    $model->retcodeApps[$n1] = retcodeApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
