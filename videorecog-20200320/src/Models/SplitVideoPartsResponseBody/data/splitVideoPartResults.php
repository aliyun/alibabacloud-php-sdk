<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody\data;

use AlibabaCloud\Tea\Model;

class splitVideoPartResults extends Model
{
    /**
     * @var float
     */
    public $beginTime;

    /**
     * @var string
     */
    public $by;

    /**
     * @var float
     */
    public $endTime;

    /**
     * @var string
     */
    public $theme;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'by'        => 'By',
        'endTime'   => 'EndTime',
        'theme'     => 'Theme',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->by) {
            $res['By'] = $this->by;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->theme) {
            $res['Theme'] = $this->theme;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return splitVideoPartResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['By'])) {
            $model->by = $map['By'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Theme'])) {
            $model->theme = $map['Theme'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
