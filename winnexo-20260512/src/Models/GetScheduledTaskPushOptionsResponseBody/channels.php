<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskPushOptionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskPushOptionsResponseBody\channels\imGroups;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskPushOptionsResponseBody\channels\methods;

class channels extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var imGroups[]
     */
    public $imGroups;

    /**
     * @var methods[]
     */
    public $methods;
    protected $_name = [
        'channelName' => 'channelName',
        'channelType' => 'channelType',
        'imGroups' => 'imGroups',
        'methods' => 'methods',
    ];

    public function validate()
    {
        if (\is_array($this->imGroups)) {
            Model::validateArray($this->imGroups);
        }
        if (\is_array($this->methods)) {
            Model::validateArray($this->methods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['channelName'] = $this->channelName;
        }

        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }

        if (null !== $this->imGroups) {
            if (\is_array($this->imGroups)) {
                $res['imGroups'] = [];
                $n1 = 0;
                foreach ($this->imGroups as $item1) {
                    $res['imGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['methods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['channelName'])) {
            $model->channelName = $map['channelName'];
        }

        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }

        if (isset($map['imGroups'])) {
            if (!empty($map['imGroups'])) {
                $model->imGroups = [];
                $n1 = 0;
                foreach ($map['imGroups'] as $item1) {
                    $model->imGroups[$n1] = imGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['methods'] as $item1) {
                    $model->methods[$n1] = methods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
