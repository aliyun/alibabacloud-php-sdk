<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListSystemLogsResponseBody;

use AlibabaCloud\Tea\Model;

class systemLogs extends Model
{
    /**
     * @example You are using******
     *
     * @var string
     */
    public $content;

    /**
     * @description Use the UTC time format: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @example 2020-10-08T16:00:00Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example Error。
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'content' => 'Content',
        'gmtCreateTime' => 'GmtCreateTime',
        'level' => 'Level',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
