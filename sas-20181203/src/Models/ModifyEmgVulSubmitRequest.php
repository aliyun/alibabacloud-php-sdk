<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyEmgVulSubmitRequest
     */
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
