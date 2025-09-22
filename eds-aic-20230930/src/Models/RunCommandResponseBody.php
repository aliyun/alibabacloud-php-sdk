<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunCommandResponseBody\runCommandInfos;

class RunCommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var runCommandInfos[]
     */
    public $runCommandInfos;
    protected $_name = [
        'invokeId' => 'InvokeId',
        'requestId' => 'RequestId',
        'runCommandInfos' => 'RunCommandInfos',
    ];

    public function validate()
    {
        if (\is_array($this->runCommandInfos)) {
            Model::validateArray($this->runCommandInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runCommandInfos) {
            if (\is_array($this->runCommandInfos)) {
                $res['RunCommandInfos'] = [];
                $n1 = 0;
                foreach ($this->runCommandInfos as $item1) {
                    $res['RunCommandInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunCommandInfos'])) {
            if (!empty($map['RunCommandInfos'])) {
                $model->runCommandInfos = [];
                $n1 = 0;
                foreach ($map['RunCommandInfos'] as $item1) {
                    $model->runCommandInfos[$n1] = runCommandInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
