<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateStatusRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var int[]
     */
    public $errorLines;

    /**
     * @var string
     */
    public $importSequence;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType' => 'AppType',
        'errorLines' => 'ErrorLines',
        'importSequence' => 'ImportSequence',
        'language' => 'Language',
        'status' => 'Status',
        'systemToken' => 'SystemToken',
    ];

    public function validate()
    {
        if (\is_array($this->errorLines)) {
            Model::validateArray($this->errorLines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->errorLines) {
            if (\is_array($this->errorLines)) {
                $res['ErrorLines'] = [];
                $n1 = 0;
                foreach ($this->errorLines as $item1) {
                    $res['ErrorLines'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->importSequence) {
            $res['ImportSequence'] = $this->importSequence;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['ErrorLines'])) {
            if (!empty($map['ErrorLines'])) {
                $model->errorLines = [];
                $n1 = 0;
                foreach ($map['ErrorLines'] as $item1) {
                    $model->errorLines[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImportSequence'])) {
            $model->importSequence = $map['ImportSequence'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
