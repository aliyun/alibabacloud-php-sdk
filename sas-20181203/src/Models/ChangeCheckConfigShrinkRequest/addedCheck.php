<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigShrinkRequest;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
