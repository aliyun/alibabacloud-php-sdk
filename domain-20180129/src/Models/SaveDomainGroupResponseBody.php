<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveDomainGroupResponseBody extends Model
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
    public $requestId;

    /**
     * @var string
     */
    public $domainGroupName;

    /**
     * @var string
     */
    public $modificationDate;

    /**
     * @var string
     */
    public $domainGroupStatus;

    /**
     * @var int
     */
    public $domainGroupId;

    /**
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'beingDeleted'      => 'BeingDeleted',
        'creationDate'      => 'CreationDate',
        'requestId'         => 'RequestId',
        'domainGroupName'   => 'DomainGroupName',
        'modificationDate'  => 'ModificationDate',
        'domainGroupStatus' => 'DomainGroupStatus',
        'domainGroupId'     => 'DomainGroupId',
        'totalNumber'       => 'TotalNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beingDeleted) {
            $res['BeingDeleted'] = $this->beingDeleted;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainGroupName) {
            $res['DomainGroupName'] = $this->domainGroupName;
        }
        if (null !== $this->modificationDate) {
            $res['ModificationDate'] = $this->modificationDate;
        }
        if (null !== $this->domainGroupStatus) {
            $res['DomainGroupStatus'] = $this->domainGroupStatus;
        }
        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveDomainGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeingDeleted'])) {
            $model->beingDeleted = $map['BeingDeleted'];
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainGroupName'])) {
            $model->domainGroupName = $map['DomainGroupName'];
        }
        if (isset($map['ModificationDate'])) {
            $model->modificationDate = $map['ModificationDate'];
        }
        if (isset($map['DomainGroupStatus'])) {
            $model->domainGroupStatus = $map['DomainGroupStatus'];
        }
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
