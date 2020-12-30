<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponseBody;

use AlibabaCloud\Tea\Model;

class checkWarnings extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $checkWarningId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $item;

    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'status'         => 'Status',
        'checkWarningId' => 'CheckWarningId',
        'type'           => 'Type',
        'uuid'           => 'Uuid',
        'item'           => 'Item',
        'checkId'        => 'CheckId',
        'level'          => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->checkWarningId) {
            $res['CheckWarningId'] = $this->checkWarningId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CheckWarningId'])) {
            $model->checkWarningId = $map['CheckWarningId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
