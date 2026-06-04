<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RollbackAppCodeSnapshotResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $changeLog;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $logicalNumber;
    protected $_name = [
        'changeLog' => 'ChangeLog',
        'gmtCreate' => 'GmtCreate',
        'logicalNumber' => 'LogicalNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeLog) {
            $res['ChangeLog'] = $this->changeLog;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->logicalNumber) {
            $res['LogicalNumber'] = $this->logicalNumber;
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
        if (isset($map['ChangeLog'])) {
            $model->changeLog = $map['ChangeLog'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['LogicalNumber'])) {
            $model->logicalNumber = $map['LogicalNumber'];
        }

        return $model;
    }
}
