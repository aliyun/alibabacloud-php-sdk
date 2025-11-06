<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainGroupListResponseBody\data;

use AlibabaCloud\Dara\Model;

class domainGroup extends Model
{
    /**
     * @var bool
     */
    public $beingDeleted;

    /**
     * @var string
     */
    public $creationDate;

    /**
     * @var string
     */
    public $domainGroupId;

    /**
     * @var string
     */
    public $domainGroupName;

    /**
     * @var string
     */
    public $domainGroupStatus;

    /**
     * @var string
     */
    public $modificationDate;

    /**
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'beingDeleted' => 'BeingDeleted',
        'creationDate' => 'CreationDate',
        'domainGroupId' => 'DomainGroupId',
        'domainGroupName' => 'DomainGroupName',
        'domainGroupStatus' => 'DomainGroupStatus',
        'modificationDate' => 'ModificationDate',
        'totalNumber' => 'TotalNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beingDeleted) {
            $res['BeingDeleted'] = $this->beingDeleted;
        }

        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }

        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }

        if (null !== $this->domainGroupName) {
            $res['DomainGroupName'] = $this->domainGroupName;
        }

        if (null !== $this->domainGroupStatus) {
            $res['DomainGroupStatus'] = $this->domainGroupStatus;
        }

        if (null !== $this->modificationDate) {
            $res['ModificationDate'] = $this->modificationDate;
        }

        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
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
        if (isset($map['BeingDeleted'])) {
            $model->beingDeleted = $map['BeingDeleted'];
        }

        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }

        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }

        if (isset($map['DomainGroupName'])) {
            $model->domainGroupName = $map['DomainGroupName'];
        }

        if (isset($map['DomainGroupStatus'])) {
            $model->domainGroupStatus = $map['DomainGroupStatus'];
        }

        if (isset($map['ModificationDate'])) {
            $model->modificationDate = $map['ModificationDate'];
        }

        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
