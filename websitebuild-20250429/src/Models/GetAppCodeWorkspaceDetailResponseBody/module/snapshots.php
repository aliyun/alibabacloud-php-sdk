<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppCodeWorkspaceDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $changeLog;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var int
     */
    public $logicalNumber;
    protected $_name = [
        'changeLog' => 'ChangeLog',
        'gmtCreateTime' => 'GmtCreateTime',
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

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
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

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['LogicalNumber'])) {
            $model->logicalNumber = $map['LogicalNumber'];
        }

        return $model;
    }
}
