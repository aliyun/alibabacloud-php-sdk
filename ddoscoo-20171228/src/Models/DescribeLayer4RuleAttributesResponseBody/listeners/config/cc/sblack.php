<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners\config\cc;

use AlibabaCloud\Tea\Model;

class sblack extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $expires;

    /**
     * @var int
     */
    public $during;

    /**
     * @var int
     */
    public $cnt;
    protected $_name = [
        'type'    => 'Type',
        'expires' => 'Expires',
        'during'  => 'During',
        'cnt'     => 'Cnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->during) {
            $res['During'] = $this->during;
        }
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sblack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['During'])) {
            $model->during = $map['During'];
        }
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }

        return $model;
    }
}
