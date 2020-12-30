<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListResponseBody;

use AlibabaCloud\Tea\Model;

class groupedVulItems extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $nntfCount;

    /**
     * @var int
     */
    public $gmtLast;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $laterCount;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $asapCount;
    protected $_name = [
        'status'       => 'Status',
        'type'         => 'Type',
        'nntfCount'    => 'NntfCount',
        'gmtLast'      => 'GmtLast',
        'lastScanTime' => 'LastScanTime',
        'tags'         => 'Tags',
        'laterCount'   => 'LaterCount',
        'aliasName'    => 'AliasName',
        'name'         => 'Name',
        'asapCount'    => 'AsapCount',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }
        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }
        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }

        return $model;
    }
}
