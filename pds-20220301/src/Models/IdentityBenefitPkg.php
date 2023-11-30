<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class IdentityBenefitPkg extends Model
{
    /**
     * @var string
     */
    public $benefitPkgId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'benefitPkgId' => 'benefit_pkg_id',
        'name'         => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->benefitPkgId) {
            $res['benefit_pkg_id'] = $this->benefitPkgId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdentityBenefitPkg
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['benefit_pkg_id'])) {
            $model->benefitPkgId = $map['benefit_pkg_id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
