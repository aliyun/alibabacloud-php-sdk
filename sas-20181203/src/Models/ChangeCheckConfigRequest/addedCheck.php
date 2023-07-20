<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest;

use AlibabaCloud\Tea\Model;

class addedCheck extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var int
     */
    public $sectionId;
    protected $_name = [
        'checkId'   => 'CheckId',
        'sectionId' => 'SectionId',
    ];

    public function validate()
    {
    }

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
     * @return addedCheck
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
