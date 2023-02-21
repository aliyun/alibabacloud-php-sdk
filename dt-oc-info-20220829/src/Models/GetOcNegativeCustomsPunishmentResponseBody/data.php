<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeCustomsPunishmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $basis;

    /**
     * @example ""
     *
     * @var string
     */
    public $caseNo;

    /**
     * @example ""
     *
     * @var string
     */
    public $customs;

    /**
     * @example ""
     *
     * @var string
     */
    public $customsNo;

    /**
     * @example ""
     *
     * @var string
     */
    public $legalName;

    /**
     * @var string
     */
    public $punishDate;

    /**
     * @example ""
     *
     * @var string
     */
    public $punishType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'basis'      => 'Basis',
        'caseNo'     => 'CaseNo',
        'customs'    => 'Customs',
        'customsNo'  => 'CustomsNo',
        'legalName'  => 'LegalName',
        'punishDate' => 'PunishDate',
        'punishType' => 'PunishType',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basis) {
            $res['Basis'] = $this->basis;
        }
        if (null !== $this->caseNo) {
            $res['CaseNo'] = $this->caseNo;
        }
        if (null !== $this->customs) {
            $res['Customs'] = $this->customs;
        }
        if (null !== $this->customsNo) {
            $res['CustomsNo'] = $this->customsNo;
        }
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->punishDate) {
            $res['PunishDate'] = $this->punishDate;
        }
        if (null !== $this->punishType) {
            $res['PunishType'] = $this->punishType;
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
        if (isset($map['Basis'])) {
            $model->basis = $map['Basis'];
        }
        if (isset($map['CaseNo'])) {
            $model->caseNo = $map['CaseNo'];
        }
        if (isset($map['Customs'])) {
            $model->customs = $map['Customs'];
        }
        if (isset($map['CustomsNo'])) {
            $model->customsNo = $map['CustomsNo'];
        }
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['PunishDate'])) {
            $model->punishDate = $map['PunishDate'];
        }
        if (isset($map['PunishType'])) {
            $model->punishType = $map['PunishType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
