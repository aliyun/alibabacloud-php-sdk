<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemResponseBody;

use AlibabaCloud\Tea\Model;

class groupedVulItems extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var int
     */
    public $gmtLastCheck;

    /**
     * @var int
     */
    public $gmtPublish;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pendingCount;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'    => 'AliasName',
        'gmtLastCheck' => 'GmtLastCheck',
        'gmtPublish'   => 'GmtPublish',
        'name'         => 'Name',
        'pendingCount' => 'PendingCount',
        'progress'     => 'Progress',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->gmtLastCheck) {
            $res['GmtLastCheck'] = $this->gmtLastCheck;
        }
        if (null !== $this->gmtPublish) {
            $res['GmtPublish'] = $this->gmtPublish;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pendingCount) {
            $res['PendingCount'] = $this->pendingCount;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupedVulItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['GmtLastCheck'])) {
            $model->gmtLastCheck = $map['GmtLastCheck'];
        }
        if (isset($map['GmtPublish'])) {
            $model->gmtPublish = $map['GmtPublish'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PendingCount'])) {
            $model->pendingCount = $map['PendingCount'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
