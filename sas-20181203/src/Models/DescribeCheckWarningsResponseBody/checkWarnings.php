<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponseBody;

use AlibabaCloud\Tea\Model;

class checkWarnings extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var int
     */
    public $checkWarningId;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'checkId'        => 'CheckId',
        'checkWarningId' => 'CheckWarningId',
        'item'           => 'Item',
        'level'          => 'Level',
        'status'         => 'Status',
        'type'           => 'Type',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkWarningId) {
            $res['CheckWarningId'] = $this->checkWarningId;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkWarnings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckWarningId'])) {
            $model->checkWarningId = $map['CheckWarningId'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
