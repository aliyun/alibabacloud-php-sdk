<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;

class ListRegionsRequest extends Model
{
    /**
     * @var bool
     */
    public $audited;

    /**
     * @var bool
     */
    public $identified;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'audited' => 'Audited',
        'identified' => 'Identified',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audited) {
            $res['Audited'] = $this->audited;
        }

        if (null !== $this->identified) {
            $res['Identified'] = $this->identified;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['Audited'])) {
            $model->audited = $map['Audited'];
        }

        if (isset($map['Identified'])) {
            $model->identified = $map['Identified'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
