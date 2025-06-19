<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceSettingsResponseBody\settings;

class DescribeRenderingInstanceSettingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var settings[]
     */
    public $settings;
    protected $_name = [
        'requestId' => 'RequestId',
        'settings' => 'Settings',
    ];

    public function validate()
    {
        if (\is_array($this->settings)) {
            Model::validateArray($this->settings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->settings) {
            if (\is_array($this->settings)) {
                $res['Settings'] = [];
                $n1 = 0;
                foreach ($this->settings as $item1) {
                    $res['Settings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Settings'])) {
            if (!empty($map['Settings'])) {
                $model->settings = [];
                $n1 = 0;
                foreach ($map['Settings'] as $item1) {
                    $model->settings[$n1] = settings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
