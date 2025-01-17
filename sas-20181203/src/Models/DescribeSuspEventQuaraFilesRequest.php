<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSuspEventQuaraFilesRequest extends Model
{
    /**
     * @var string
     */
    public $currentPage;
    /**
     * @var string
     */
    public $from;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var int
     */
    public $groupingId;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $quaraTag;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'from'        => 'From',
        'groupId'     => 'GroupId',
        'groupingId'  => 'GroupingId',
        'pageSize'    => 'PageSize',
        'quaraTag'    => 'QuaraTag',
        'sourceIp'    => 'SourceIp',
        'status'      => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupingId) {
            $res['GroupingId'] = $this->groupingId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->quaraTag) {
            $res['QuaraTag'] = $this->quaraTag;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupingId'])) {
            $model->groupingId = $map['GroupingId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QuaraTag'])) {
            $model->quaraTag = $map['QuaraTag'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
