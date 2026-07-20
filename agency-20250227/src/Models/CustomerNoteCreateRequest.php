<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models;

use AlibabaCloud\Dara\Model;

class CustomerNoteCreateRequest extends Model
{
    /**
     * @var string
     */
    public $contactInformation;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $customerUid;

    /**
     * @var string
     */
    public $noteContent;

    /**
     * @var int
     */
    public $touchDate;
    protected $_name = [
        'contactInformation' => 'ContactInformation',
        'contactName' => 'ContactName',
        'customerName' => 'CustomerName',
        'customerUid' => 'CustomerUid',
        'noteContent' => 'NoteContent',
        'touchDate' => 'TouchDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactInformation) {
            $res['ContactInformation'] = $this->contactInformation;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }

        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }

        if (null !== $this->noteContent) {
            $res['NoteContent'] = $this->noteContent;
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
        if (isset($map['ContactInformation'])) {
            $model->contactInformation = $map['ContactInformation'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }

        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }

        if (isset($map['NoteContent'])) {
            $model->noteContent = $map['NoteContent'];
        }

        if (isset($map['TouchDate'])) {
            $model->touchDate = $map['TouchDate'];
        }

        return $model;
    }
}
