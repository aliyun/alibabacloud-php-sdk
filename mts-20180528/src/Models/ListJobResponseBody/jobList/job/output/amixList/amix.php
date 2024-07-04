<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\ListJobResponseBody\jobList\job\output\amixList;

use AlibabaCloud\Tea\Model;

class amix extends Model
{
    /**
     * @var string
     */
    public $amixURL;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $map;

    /**
     * @var string
     */
    public $mixDurMode;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'amixURL'    => 'AmixURL',
        'duration'   => 'Duration',
        'map'        => 'Map',
        'mixDurMode' => 'MixDurMode',
        'start'      => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amixURL) {
            $res['AmixURL'] = $this->amixURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->map) {
            $res['Map'] = $this->map;
        }
        if (null !== $this->mixDurMode) {
            $res['MixDurMode'] = $this->mixDurMode;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return amix
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AmixURL'])) {
            $model->amixURL = $map['AmixURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Map'])) {
            $model->map = $map['Map'];
        }
        if (isset($map['MixDurMode'])) {
            $model->mixDurMode = $map['MixDurMode'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
