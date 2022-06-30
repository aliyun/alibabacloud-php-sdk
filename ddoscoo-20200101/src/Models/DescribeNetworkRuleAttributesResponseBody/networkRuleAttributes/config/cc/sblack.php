<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\cc;

use AlibabaCloud\Tea\Model;

class sblack extends Model
{
    /**
     * @var int
     */
    public $cnt;

    /**
     * @var int
     */
    public $during;

    /**
     * @var int
     */
    public $expires;

    /**
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
