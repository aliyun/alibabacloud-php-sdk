<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListApplicationTemplateResponseBody\applicationTemplates;

use AlibabaCloud\Dara\Model;

class builtInApplicationActionStatistics extends Model
{
    /**
     * @var int
     */
    public $alertApplicationCount;

    /**
     * @var int
     */
    public $allowApplicationCount;

    /**
     * @var int
     */
    public $denyApplicationCount;
    protected $_name = [
        'alertApplicationCount' => 'AlertApplicationCount',
        'allowApplicationCount' => 'AllowApplicationCount',
        'denyApplicationCount' => 'DenyApplicationCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertApplicationCount) {
            $res['AlertApplicationCount'] = $this->alertApplicationCount;
        }

        if (null !== $this->allowApplicationCount) {
            $res['AllowApplicationCount'] = $this->allowApplicationCount;
        }

        if (null !== $this->denyApplicationCount) {
            $res['DenyApplicationCount'] = $this->denyApplicationCount;
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
        if (isset($map['AlertApplicationCount'])) {
            $model->alertApplicationCount = $map['AlertApplicationCount'];
        }

        if (isset($map['AllowApplicationCount'])) {
            $model->allowApplicationCount = $map['AllowApplicationCount'];
        }

        if (isset($map['DenyApplicationCount'])) {
            $model->denyApplicationCount = $map['DenyApplicationCount'];
        }

        return $model;
    }
}
