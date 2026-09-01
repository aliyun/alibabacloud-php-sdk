<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SubmitCheckRequest extends Model
{
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var string
     */
    public $scanRange;

    /**
     * @var string
     */
    public $taskSource;
    protected $_name = [
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'scanRange' => 'ScanRange',
        'taskSource' => 'TaskSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }

        if (null !== $this->taskSource) {
            $res['TaskSource'] = $this->taskSource;
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
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['ScanRange'])) {
            $model->scanRange = $map['ScanRange'];
        }

        if (isset($map['TaskSource'])) {
            $model->taskSource = $map['TaskSource'];
        }

        return $model;
    }
}
