<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenEmerRiskResponseBody;

use AlibabaCloud\Tea\Model;

class cloudHcRiskItems extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $affectCount;

    /**
     * @example ASAP
     *
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $vulName;
    protected $_name = [
        'affectCount' => 'AffectCount',
        'level' => 'Level',
        'vulName' => 'VulName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectCount) {
            $res['AffectCount'] = $this->affectCount;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudHcRiskItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectCount'])) {
            $model->affectCount = $map['AffectCount'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['VulName'])) {
            $model->vulName = $map['VulName'];
        }

        return $model;
    }
}
