<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyEmgVulSubmitRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $userAgreement;
    protected $_name = [
        'lang'          => 'Lang',
        'name'          => 'Name',
        'userAgreement' => 'UserAgreement',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->userAgreement) {
            $res['UserAgreement'] = $this->userAgreement;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UserAgreement'])) {
            $model->userAgreement = $map['UserAgreement'];
        }

        return $model;
    }
}
