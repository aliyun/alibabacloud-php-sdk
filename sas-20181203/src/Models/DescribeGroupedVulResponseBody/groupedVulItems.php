<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulResponseBody;

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
    public $asapCount;

    /**
     * @var int
     */
    public $gmtLast;

    /**
     * @var int
     */
    public $handledCount;

    /**
     * @var int
     */
    public $laterCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nntfCount;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $totalFixCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'     => 'AliasName',
        'asapCount'     => 'AsapCount',
        'gmtLast'       => 'GmtLast',
        'handledCount'  => 'HandledCount',
        'laterCount'    => 'LaterCount',
        'name'          => 'Name',
        'nntfCount'     => 'NntfCount',
        'tags'          => 'Tags',
        'totalFixCount' => 'TotalFixCount',
        'type'          => 'Type',
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
        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
        }
        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
        }
        if (null !== $this->handledCount) {
            $res['HandledCount'] = $this->handledCount;
        }
        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->totalFixCount) {
            $res['TotalFixCount'] = $this->totalFixCount;
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
        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }
        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
        }
        if (isset($map['HandledCount'])) {
            $model->handledCount = $map['HandledCount'];
        }
        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TotalFixCount'])) {
            $model->totalFixCount = $map['TotalFixCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
