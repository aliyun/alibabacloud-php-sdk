<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CreateScanRequest extends Model
{
    /**
     * @var int
     */
    public $codeBundleId;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'codeBundleId' => 'codeBundleId',
        'kind' => 'kind',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeBundleId) {
            $res['codeBundleId'] = $this->codeBundleId;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['codeBundleId'])) {
            $model->codeBundleId = $map['codeBundleId'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
