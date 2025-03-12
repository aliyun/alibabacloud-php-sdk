<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners\config\cc;

use AlibabaCloud\Tea\Model;

class sblack extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $cnt;

    /**
     * @example 60
     *
     * @var int
     */
    public $during;

    /**
     * @example 1800
     *
     * @var int
     */
    public $expires;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'cnt'     => 'Cnt',
        'during'  => 'During',
        'expires' => 'Expires',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
        }
        if (null !== $this->during) {
            $res['During'] = $this->during;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }
        if (isset($map['During'])) {
            $model->during = $map['During'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
