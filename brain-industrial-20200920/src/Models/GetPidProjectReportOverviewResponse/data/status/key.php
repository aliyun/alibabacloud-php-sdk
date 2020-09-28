<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\status;

use AlibabaCloud\Tea\Model;

class key extends Model
{
    /**
     * @var int
     */
    public $best;

    /**
     * @var int
     */
    public $good;

    /**
     * @var int
     */
    public $middle;

    /**
     * @var int
     */
    public $bad;

    /**
     * @var int
     */
    public $openLoop;
    protected $_name = [
        'best'     => 'Best',
        'good'     => 'Good',
        'middle'   => 'Middle',
        'bad'      => 'Bad',
        'openLoop' => 'OpenLoop',
    ];

    public function validate()
    {
        Model::validateRequired('best', $this->best, true);
        Model::validateRequired('good', $this->good, true);
        Model::validateRequired('middle', $this->middle, true);
        Model::validateRequired('bad', $this->bad, true);
        Model::validateRequired('openLoop', $this->openLoop, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->best) {
            $res['Best'] = $this->best;
        }
        if (null !== $this->good) {
            $res['Good'] = $this->good;
        }
        if (null !== $this->middle) {
            $res['Middle'] = $this->middle;
        }
        if (null !== $this->bad) {
            $res['Bad'] = $this->bad;
        }
        if (null !== $this->openLoop) {
            $res['OpenLoop'] = $this->openLoop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return key
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Best'])) {
            $model->best = $map['Best'];
        }
        if (isset($map['Good'])) {
            $model->good = $map['Good'];
        }
        if (isset($map['Middle'])) {
            $model->middle = $map['Middle'];
        }
        if (isset($map['Bad'])) {
            $model->bad = $map['Bad'];
        }
        if (isset($map['OpenLoop'])) {
            $model->openLoop = $map['OpenLoop'];
        }

        return $model;
    }
}
