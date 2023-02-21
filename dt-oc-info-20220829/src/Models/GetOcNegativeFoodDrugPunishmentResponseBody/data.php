<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeFoodDrugPunishmentResponseBody;

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
     * @var string
     */
    public $illegalType;

    /**
     * @var string
     */
    public $lawBasis;

    /**
     * @example 2017-04-26
     *
     * @var string
     */
    public $publicDate;

    /**
     * @example 2017-04-26
     *
     * @var string
     */
    public $punishDate;

    /**
     * @var string
     */
    public $punishNum;

    /**
     * @var string
     */
    public $punishResult;
    protected $_name = [
        'department'   => 'Department',
        'entName'      => 'EntName',
        'illegalType'  => 'IllegalType',
        'lawBasis'     => 'LawBasis',
        'publicDate'   => 'PublicDate',
        'punishDate'   => 'PunishDate',
        'punishNum'    => 'PunishNum',
        'punishResult' => 'PunishResult',
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
        if (null !== $this->illegalType) {
            $res['IllegalType'] = $this->illegalType;
        }
        if (null !== $this->lawBasis) {
            $res['LawBasis'] = $this->lawBasis;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->punishDate) {
            $res['PunishDate'] = $this->punishDate;
        }
        if (null !== $this->punishNum) {
            $res['PunishNum'] = $this->punishNum;
        }
        if (null !== $this->punishResult) {
            $res['PunishResult'] = $this->punishResult;
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
        if (isset($map['IllegalType'])) {
            $model->illegalType = $map['IllegalType'];
        }
        if (isset($map['LawBasis'])) {
            $model->lawBasis = $map['LawBasis'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
        }
        if (isset($map['PunishDate'])) {
            $model->punishDate = $map['PunishDate'];
        }
        if (isset($map['PunishNum'])) {
            $model->punishNum = $map['PunishNum'];
        }
        if (isset($map['PunishResult'])) {
            $model->punishResult = $map['PunishResult'];
        }

        return $model;
    }
}
