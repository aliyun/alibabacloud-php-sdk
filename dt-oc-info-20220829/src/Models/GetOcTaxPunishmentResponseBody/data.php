<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxPunishmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example -
     *
     * @var string
     */
    public $eventName;

    /**
     * @example -
     *
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $legalName;

    /**
     * @example 2011-10-01
     *
     * @var string
     */
    public $punishDate;

    /**
     * @example 91310117MA7DKB2J92
     *
     * @var string
     */
    public $taxpayerNum;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'department'  => 'Department',
        'entName'     => 'EntName',
        'eventName'   => 'EventName',
        'eventType'   => 'EventType',
        'legalName'   => 'LegalName',
        'punishDate'  => 'PunishDate',
        'taxpayerNum' => 'TaxpayerNum',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->punishDate) {
            $res['PunishDate'] = $this->punishDate;
        }
        if (null !== $this->taxpayerNum) {
            $res['TaxpayerNum'] = $this->taxpayerNum;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['PunishDate'])) {
            $model->punishDate = $map['PunishDate'];
        }
        if (isset($map['TaxpayerNum'])) {
            $model->taxpayerNum = $map['TaxpayerNum'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
