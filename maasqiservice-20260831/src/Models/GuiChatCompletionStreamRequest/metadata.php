<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string[]
     */
    public $appList;

    /**
     * @var string[]
     */
    public $availableApps;

    /**
     * @var string
     */
    public $harnessMessage;

    /**
     * @var int
     */
    public $screenHeight;

    /**
     * @var int
     */
    public $screenWidth;
    protected $_name = [
        'appList' => 'appList',
        'availableApps' => 'availableApps',
        'harnessMessage' => 'harnessMessage',
        'screenHeight' => 'screenHeight',
        'screenWidth' => 'screenWidth',
    ];

    public function validate()
    {
        if (\is_array($this->appList)) {
            Model::validateArray($this->appList);
        }
        if (\is_array($this->availableApps)) {
            Model::validateArray($this->availableApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appList) {
            if (\is_array($this->appList)) {
                $res['appList'] = [];
                $n1 = 0;
                foreach ($this->appList as $item1) {
                    $res['appList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->availableApps) {
            if (\is_array($this->availableApps)) {
                $res['availableApps'] = [];
                $n1 = 0;
                foreach ($this->availableApps as $item1) {
                    $res['availableApps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->harnessMessage) {
            $res['harnessMessage'] = $this->harnessMessage;
        }

        if (null !== $this->screenHeight) {
            $res['screenHeight'] = $this->screenHeight;
        }

        if (null !== $this->screenWidth) {
            $res['screenWidth'] = $this->screenWidth;
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
        if (isset($map['appList'])) {
            if (!empty($map['appList'])) {
                $model->appList = [];
                $n1 = 0;
                foreach ($map['appList'] as $item1) {
                    $model->appList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['availableApps'])) {
            if (!empty($map['availableApps'])) {
                $model->availableApps = [];
                $n1 = 0;
                foreach ($map['availableApps'] as $item1) {
                    $model->availableApps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['harnessMessage'])) {
            $model->harnessMessage = $map['harnessMessage'];
        }

        if (isset($map['screenHeight'])) {
            $model->screenHeight = $map['screenHeight'];
        }

        if (isset($map['screenWidth'])) {
            $model->screenWidth = $map['screenWidth'];
        }

        return $model;
    }
}
