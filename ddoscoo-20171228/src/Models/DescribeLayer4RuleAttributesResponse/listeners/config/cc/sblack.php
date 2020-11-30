<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config\cc;

use AlibabaCloud\Tea\Model;

class sblack extends Model
{
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
    public $cnt;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'during'  => 'During',
        'expires' => 'Expires',
        'cnt'     => 'Cnt',
        'type'    => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('during', $this->during, true);
        Model::validateRequired('expires', $this->expires, true);
        Model::validateRequired('cnt', $this->cnt, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->during) {
            $res['During'] = $this->during;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
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
        if (isset($map['During'])) {
            $model->during = $map['During'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
