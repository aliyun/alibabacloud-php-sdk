<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponseBody\instanceRisks;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The IP addresses of servers.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The risk levels. Valid values:
     *
     *   **medium**
     *
     * @example medium
     *
     * @var string
     */
    public $level;

    /**
     * @description The type.
     *
     * @example ResourceNotProtected
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ip' => 'Ip',
        'level' => 'Level',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
