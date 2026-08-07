<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptVersionRequest\interactionConfig;

use AlibabaCloud\Dara\Model;

class bargeInConfig extends Model
{
    /**
     * @var bool
     */
    public $closingBargeInEnabled;

    /**
     * @var bool
     */
    public $globalBargeInEnabled;

    /**
     * @var bool
     */
    public $openingBargeInEnabled;
    protected $_name = [
        'closingBargeInEnabled' => 'ClosingBargeInEnabled',
        'globalBargeInEnabled' => 'GlobalBargeInEnabled',
        'openingBargeInEnabled' => 'OpeningBargeInEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->closingBargeInEnabled) {
            $res['ClosingBargeInEnabled'] = $this->closingBargeInEnabled;
        }

        if (null !== $this->globalBargeInEnabled) {
            $res['GlobalBargeInEnabled'] = $this->globalBargeInEnabled;
        }

        if (null !== $this->openingBargeInEnabled) {
            $res['OpeningBargeInEnabled'] = $this->openingBargeInEnabled;
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
        if (isset($map['ClosingBargeInEnabled'])) {
            $model->closingBargeInEnabled = $map['ClosingBargeInEnabled'];
        }

        if (isset($map['GlobalBargeInEnabled'])) {
            $model->globalBargeInEnabled = $map['GlobalBargeInEnabled'];
        }

        if (isset($map['OpeningBargeInEnabled'])) {
            $model->openingBargeInEnabled = $map['OpeningBargeInEnabled'];
        }

        return $model;
    }
}
