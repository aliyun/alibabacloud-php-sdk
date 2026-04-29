<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawPluginsResponseBody\diagnostics;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawPluginsResponseBody\plugins;

class DescribePolarClawPluginsResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var diagnostics[]
     */
    public $diagnostics;

    /**
     * @var string
     */
    public $message;

    /**
     * @var plugins[]
     */
    public $plugins;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'diagnostics' => 'Diagnostics',
        'message' => 'Message',
        'plugins' => 'Plugins',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->diagnostics)) {
            Model::validateArray($this->diagnostics);
        }
        if (\is_array($this->plugins)) {
            Model::validateArray($this->plugins);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->diagnostics) {
            if (\is_array($this->diagnostics)) {
                $res['Diagnostics'] = [];
                $n1 = 0;
                foreach ($this->diagnostics as $item1) {
                    $res['Diagnostics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->plugins) {
            if (\is_array($this->plugins)) {
                $res['Plugins'] = [];
                $n1 = 0;
                foreach ($this->plugins as $item1) {
                    $res['Plugins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Diagnostics'])) {
            if (!empty($map['Diagnostics'])) {
                $model->diagnostics = [];
                $n1 = 0;
                foreach ($map['Diagnostics'] as $item1) {
                    $model->diagnostics[$n1] = diagnostics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Plugins'])) {
            if (!empty($map['Plugins'])) {
                $model->plugins = [];
                $n1 = 0;
                foreach ($map['Plugins'] as $item1) {
                    $model->plugins[$n1] = plugins::fromMap($item1);
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
