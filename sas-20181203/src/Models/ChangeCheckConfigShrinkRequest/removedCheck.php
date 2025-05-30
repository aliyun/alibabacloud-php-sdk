<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigShrinkRequest;

use AlibabaCloud\Tea\Model;

class removedCheck extends Model
{
    /**
     * @description The ID of the check item.
     *
     * >  You can call the [ListCheckResult](~~ListCheckResult~~) operation to obtain the ID of the check item.
     *
     * @example 19
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The section ID of the check item.
     *
     * @example 69
     *
     * @var int
     */
    public $sectionId;
    protected $_name = [
        'checkId' => 'CheckId',
        'sectionId' => 'SectionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->sectionId) {
            $res['SectionId'] = $this->sectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removedCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['SectionId'])) {
            $model->sectionId = $map['SectionId'];
        }

        return $model;
    }
}
