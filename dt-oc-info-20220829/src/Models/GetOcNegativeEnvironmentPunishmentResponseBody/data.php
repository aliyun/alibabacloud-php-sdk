<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeEnvironmentPunishmentResponseBody;

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
    public $execStatus;

    /**
     * @var string
     */
    public $punishBasis;

    /**
     * @var string
     */
    public $punishContent;

    /**
     * @example 2017-08-11
     *
     * @var string
     */
    public $punishDate;

    /**
     * @var string
     */
    public $punishLaw;

    /**
     * @var string
     */
    public $punishNum;

    /**
     * @var string
     */
    public $punishRes;
    protected $_name = [
        'department'    => 'Department',
        'entName'       => 'EntName',
        'execStatus'    => 'ExecStatus',
        'punishBasis'   => 'PunishBasis',
        'punishContent' => 'PunishContent',
        'punishDate'    => 'PunishDate',
        'punishLaw'     => 'PunishLaw',
        'punishNum'     => 'PunishNum',
        'punishRes'     => 'PunishRes',
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
        if (null !== $this->execStatus) {
            $res['ExecStatus'] = $this->execStatus;
        }
        if (null !== $this->punishBasis) {
            $res['PunishBasis'] = $this->punishBasis;
        }
        if (null !== $this->punishContent) {
            $res['PunishContent'] = $this->punishContent;
        }
        if (null !== $this->punishDate) {
            $res['PunishDate'] = $this->punishDate;
        }
        if (null !== $this->punishLaw) {
            $res['PunishLaw'] = $this->punishLaw;
        }
        if (null !== $this->punishNum) {
            $res['PunishNum'] = $this->punishNum;
        }
        if (null !== $this->punishRes) {
            $res['PunishRes'] = $this->punishRes;
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
        if (isset($map['ExecStatus'])) {
            $model->execStatus = $map['ExecStatus'];
        }
        if (isset($map['PunishBasis'])) {
            $model->punishBasis = $map['PunishBasis'];
        }
        if (isset($map['PunishContent'])) {
            $model->punishContent = $map['PunishContent'];
        }
        if (isset($map['PunishDate'])) {
            $model->punishDate = $map['PunishDate'];
        }
        if (isset($map['PunishLaw'])) {
            $model->punishLaw = $map['PunishLaw'];
        }
        if (isset($map['PunishNum'])) {
            $model->punishNum = $map['PunishNum'];
        }
        if (isset($map['PunishRes'])) {
            $model->punishRes = $map['PunishRes'];
        }

        return $model;
    }
}
