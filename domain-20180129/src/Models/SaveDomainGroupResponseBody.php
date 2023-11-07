<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveDomainGroupResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $beingDeleted;

    /**
     * @example 2018-04-02 15:59:06
     *
     * @var string
     */
    public $creationDate;

    /**
     * @example 123456
     *
     * @var int
     */
    public $domainGroupId;

    /**
     * @var string
     */
    public $domainGroupName;

    /**
     * @example COMPLETE
     *
     * @var string
     */
    public $domainGroupStatus;

    /**
     * @example 2018-04-02 15:59:06
     *
     * @var string
     */
    public $modificationDate;

    /**
     * @example 80011ABC-F573-4795-B0E8-377BFBBA3422
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'beingDeleted'      => 'BeingDeleted',
        'creationDate'      => 'CreationDate',
        'domainGroupId'     => 'DomainGroupId',
        'domainGroupName'   => 'DomainGroupName',
        'domainGroupStatus' => 'DomainGroupStatus',
        'modificationDate'  => 'ModificationDate',
        'requestId'         => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
