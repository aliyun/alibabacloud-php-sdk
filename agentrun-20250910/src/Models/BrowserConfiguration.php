<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BrowserConfiguration extends Model
{
    /**
     * @var string
     */
    public $browserType;

    /**
     * @var string[]
     */
    public $enableExtension;

    /**
     * @var bool
     */
    public $headless;

    /**
     * @var string
     */
    public $userAgent;

    /**
     * @var ViewPortConfiguration
     */
    public $viewPort;
    protected $_name = [
        'browserType' => 'browserType',
        'enableExtension' => 'enableExtension',
        'headless' => 'headless',
        'userAgent' => 'userAgent',
        'viewPort' => 'viewPort',
    ];

    public function validate()
    {
        if (\is_array($this->enableExtension)) {
            Model::validateArray($this->enableExtension);
        }
        if (null !== $this->viewPort) {
            $this->viewPort->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserType) {
            $res['browserType'] = $this->browserType;
        }

        if (null !== $this->enableExtension) {
            if (\is_array($this->enableExtension)) {
                $res['enableExtension'] = [];
                $n1 = 0;
                foreach ($this->enableExtension as $item1) {
                    $res['enableExtension'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->headless) {
            $res['headless'] = $this->headless;
        }

        if (null !== $this->userAgent) {
            $res['userAgent'] = $this->userAgent;
        }

        if (null !== $this->viewPort) {
            $res['viewPort'] = null !== $this->viewPort ? $this->viewPort->toArray($noStream) : $this->viewPort;
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
        if (isset($map['browserType'])) {
            $model->browserType = $map['browserType'];
        }

        if (isset($map['enableExtension'])) {
            if (!empty($map['enableExtension'])) {
                $model->enableExtension = [];
                $n1 = 0;
                foreach ($map['enableExtension'] as $item1) {
                    $model->enableExtension[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['headless'])) {
            $model->headless = $map['headless'];
        }

        if (isset($map['userAgent'])) {
            $model->userAgent = $map['userAgent'];
        }

        if (isset($map['viewPort'])) {
            $model->viewPort = ViewPortConfiguration::fromMap($map['viewPort']);
        }

        return $model;
    }
}
