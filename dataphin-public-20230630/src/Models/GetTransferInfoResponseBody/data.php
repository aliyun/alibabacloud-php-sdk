<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTransferInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTransferInfoResponseBody\data\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTransferInfoResponseBody\data\lastModifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTransferInfoResponseBody\data\newOwner;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTransferInfoResponseBody\data\oldOwner;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTransferInfoResponseBody\data\privilegeTransferResultEntries;

class data extends Model
{
    /**
     * @var creator
     */
    public $creator;

    /**
     * @var int
     */
    public $flowId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var lastModifier
     */
    public $lastModifier;

    /**
     * @var newOwner
     */
    public $newOwner;

    /**
     * @var oldOwner
     */
    public $oldOwner;

    /**
     * @var string
     */
    public $privilegeTransferMode;

    /**
     * @var privilegeTransferResultEntries[]
     */
    public $privilegeTransferResultEntries;

    /**
     * @var int
     */
    public $proposalId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $transferComment;

    /**
     * @var string
     */
    public $transferStatus;
    protected $_name = [
        'creator' => 'Creator',
        'flowId' => 'FlowId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'lastModifier' => 'LastModifier',
        'newOwner' => 'NewOwner',
        'oldOwner' => 'OldOwner',
        'privilegeTransferMode' => 'PrivilegeTransferMode',
        'privilegeTransferResultEntries' => 'PrivilegeTransferResultEntries',
        'proposalId' => 'ProposalId',
        'title' => 'Title',
        'transferComment' => 'TransferComment',
        'transferStatus' => 'TransferStatus',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->lastModifier) {
            $this->lastModifier->validate();
        }
        if (null !== $this->newOwner) {
            $this->newOwner->validate();
        }
        if (null !== $this->oldOwner) {
            $this->oldOwner->validate();
        }
        if (\is_array($this->privilegeTransferResultEntries)) {
            Model::validateArray($this->privilegeTransferResultEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->lastModifier) {
            $res['LastModifier'] = null !== $this->lastModifier ? $this->lastModifier->toArray($noStream) : $this->lastModifier;
        }

        if (null !== $this->newOwner) {
            $res['NewOwner'] = null !== $this->newOwner ? $this->newOwner->toArray($noStream) : $this->newOwner;
        }

        if (null !== $this->oldOwner) {
            $res['OldOwner'] = null !== $this->oldOwner ? $this->oldOwner->toArray($noStream) : $this->oldOwner;
        }

        if (null !== $this->privilegeTransferMode) {
            $res['PrivilegeTransferMode'] = $this->privilegeTransferMode;
        }

        if (null !== $this->privilegeTransferResultEntries) {
            if (\is_array($this->privilegeTransferResultEntries)) {
                $res['PrivilegeTransferResultEntries'] = [];
                $n1 = 0;
                foreach ($this->privilegeTransferResultEntries as $item1) {
                    $res['PrivilegeTransferResultEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->proposalId) {
            $res['ProposalId'] = $this->proposalId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->transferComment) {
            $res['TransferComment'] = $this->transferComment;
        }

        if (null !== $this->transferStatus) {
            $res['TransferStatus'] = $this->transferStatus;
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
        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LastModifier'])) {
            $model->lastModifier = lastModifier::fromMap($map['LastModifier']);
        }

        if (isset($map['NewOwner'])) {
            $model->newOwner = newOwner::fromMap($map['NewOwner']);
        }

        if (isset($map['OldOwner'])) {
            $model->oldOwner = oldOwner::fromMap($map['OldOwner']);
        }

        if (isset($map['PrivilegeTransferMode'])) {
            $model->privilegeTransferMode = $map['PrivilegeTransferMode'];
        }

        if (isset($map['PrivilegeTransferResultEntries'])) {
            if (!empty($map['PrivilegeTransferResultEntries'])) {
                $model->privilegeTransferResultEntries = [];
                $n1 = 0;
                foreach ($map['PrivilegeTransferResultEntries'] as $item1) {
                    $model->privilegeTransferResultEntries[$n1] = privilegeTransferResultEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProposalId'])) {
            $model->proposalId = $map['ProposalId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TransferComment'])) {
            $model->transferComment = $map['TransferComment'];
        }

        if (isset($map['TransferStatus'])) {
            $model->transferStatus = $map['TransferStatus'];
        }

        return $model;
    }
}
