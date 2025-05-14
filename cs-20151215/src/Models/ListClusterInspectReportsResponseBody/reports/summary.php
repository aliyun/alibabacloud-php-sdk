<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsResponseBody\reports;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $adviceCount;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var int
     */
    public $normalCount;

    /**
     * @var int
     */
    public $warnCount;
    protected $_name = [
        'adviceCount' => 'adviceCount',
        'code' => 'code',
        'errorCount' => 'errorCount',
        'normalCount' => 'normalCount',
        'warnCount' => 'warnCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adviceCount) {
            $res['adviceCount'] = $this->adviceCount;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->errorCount) {
            $res['errorCount'] = $this->errorCount;
        }

        if (null !== $this->normalCount) {
            $res['normalCount'] = $this->normalCount;
        }

        if (null !== $this->warnCount) {
            $res['warnCount'] = $this->warnCount;
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
        if (isset($map['adviceCount'])) {
            $model->adviceCount = $map['adviceCount'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['errorCount'])) {
            $model->errorCount = $map['errorCount'];
        }

        if (isset($map['normalCount'])) {
            $model->normalCount = $map['normalCount'];
        }

        if (isset($map['warnCount'])) {
            $model->warnCount = $map['warnCount'];
        }

        return $model;
    }
}
