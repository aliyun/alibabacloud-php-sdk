<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskPushOptionsResponseBody\channels;

use AlibabaCloud\Dara\Model;

class imGroups extends Model
{
    /**
     * @var string
     */
    public $imGroupId;

    /**
     * @var string
     */
    public $imGroupName;

    /**
     * @var int
     */
    public $mappingId;
    protected $_name = [
        'imGroupId' => 'imGroupId',
        'imGroupName' => 'imGroupName',
        'mappingId' => 'mappingId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imGroupId) {
            $res['imGroupId'] = $this->imGroupId;
        }

        if (null !== $this->imGroupName) {
            $res['imGroupName'] = $this->imGroupName;
        }

        if (null !== $this->mappingId) {
            $res['mappingId'] = $this->mappingId;
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
        if (isset($map['imGroupId'])) {
            $model->imGroupId = $map['imGroupId'];
        }

        if (isset($map['imGroupName'])) {
            $model->imGroupName = $map['imGroupName'];
        }

        if (isset($map['mappingId'])) {
            $model->mappingId = $map['mappingId'];
        }

        return $model;
    }
}
