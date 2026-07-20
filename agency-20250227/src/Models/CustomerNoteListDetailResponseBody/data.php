<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\CustomerNoteListDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20250227\Models\CustomerNoteListDetailResponseBody\data\attachment;

class data extends Model
{
    /**
     * @var string
     */
    public $aiResult;

    /**
     * @var attachment[]
     */
    public $attachment;

    /**
     * @var string
     */
    public $contactInformation;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var int
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var int
     */
    public $customerUid;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $noteContent;

    /**
     * @var int
     */
    public $noteId;

    /**
     * @var string
     */
    public $noteType;

    /**
     * @var string
     */
    public $noteTypeLabel;

    /**
     * @var string
     */
    public $touchDate;
    protected $_name = [
        'aiResult' => 'AiResult',
        'attachment' => 'Attachment',
        'contactInformation' => 'ContactInformation',
        'contactName' => 'ContactName',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'customerName' => 'CustomerName',
        'customerUid' => 'CustomerUid',
        'gmtCreate' => 'GmtCreate',
        'noteContent' => 'NoteContent',
        'noteId' => 'NoteId',
        'noteType' => 'NoteType',
        'noteTypeLabel' => 'NoteTypeLabel',
        'touchDate' => 'TouchDate',
    ];

    public function validate()
    {
        if (\is_array($this->attachment)) {
            Model::validateArray($this->attachment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiResult) {
            $res['AiResult'] = $this->aiResult;
        }

        if (null !== $this->attachment) {
            if (\is_array($this->attachment)) {
                $res['Attachment'] = [];
                $n1 = 0;
                foreach ($this->attachment as $item1) {
                    $res['Attachment'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactInformation) {
            $res['ContactInformation'] = $this->contactInformation;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }

        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->noteContent) {
            $res['NoteContent'] = $this->noteContent;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        if (null !== $this->noteType) {
            $res['NoteType'] = $this->noteType;
        }

        if (null !== $this->noteTypeLabel) {
            $res['NoteTypeLabel'] = $this->noteTypeLabel;
        }

        if (null !== $this->touchDate) {
            $res['TouchDate'] = $this->touchDate;
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
        if (isset($map['AiResult'])) {
            $model->aiResult = $map['AiResult'];
        }

        if (isset($map['Attachment'])) {
            if (!empty($map['Attachment'])) {
                $model->attachment = [];
                $n1 = 0;
                foreach ($map['Attachment'] as $item1) {
                    $model->attachment[$n1] = attachment::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactInformation'])) {
            $model->contactInformation = $map['ContactInformation'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }

        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['NoteContent'])) {
            $model->noteContent = $map['NoteContent'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['NoteType'])) {
            $model->noteType = $map['NoteType'];
        }

        if (isset($map['NoteTypeLabel'])) {
            $model->noteTypeLabel = $map['NoteTypeLabel'];
        }

        if (isset($map['TouchDate'])) {
            $model->touchDate = $map['TouchDate'];
        }

        return $model;
    }
}
