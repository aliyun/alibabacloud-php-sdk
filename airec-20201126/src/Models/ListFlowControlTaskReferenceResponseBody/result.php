<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReferenceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The average exposure rate of the item pool in the last seven days.
     *
     * @example 0.1
     *
     * @var float
     */
    public $last7PvPercent;

    /**
     * @description The average number of exposures for the items in the selected scene in the last seven days.
     *
     * @example 10
     *
     * @var float
     */
    public $last7ScenePv;

    /**
     * @description The average number of exposures for the item pool in the selected scene in the last seven days.
     *
     * @example 10
     *
     * @var float
     */
    public $last7TaskPv;

    /**
     * @description The exposure rate of the item pool yesterday.
     *
     * @example 0.1
     *
     * @var float
     */
    public $lastPvPercent;

    /**
     * @description The total number of exposures for the items in the selected scene yesterday.
     *
     * @example 10
     *
     * @var int
     */
    public $lastScenePv;

    /**
     * @description The number of exposures for the item pool in the selected scene yesterday.
     *
     * @example 10
     *
     * @var int
     */
    public $lastTaskPv;

    /**
     * @description The ID of the reference data.
     *
     * @example 421351235918
     *
     * @var string
     */
    public $referenceId;
    protected $_name = [
        'last7PvPercent' => 'last7PvPercent',
        'last7ScenePv'   => 'last7ScenePv',
        'last7TaskPv'    => 'last7TaskPv',
        'lastPvPercent'  => 'lastPvPercent',
        'lastScenePv'    => 'lastScenePv',
        'lastTaskPv'     => 'lastTaskPv',
        'referenceId'    => 'referenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->last7PvPercent) {
            $res['last7PvPercent'] = $this->last7PvPercent;
        }
        if (null !== $this->last7ScenePv) {
            $res['last7ScenePv'] = $this->last7ScenePv;
        }
        if (null !== $this->last7TaskPv) {
            $res['last7TaskPv'] = $this->last7TaskPv;
        }
        if (null !== $this->lastPvPercent) {
            $res['lastPvPercent'] = $this->lastPvPercent;
        }
        if (null !== $this->lastScenePv) {
            $res['lastScenePv'] = $this->lastScenePv;
        }
        if (null !== $this->lastTaskPv) {
            $res['lastTaskPv'] = $this->lastTaskPv;
        }
        if (null !== $this->referenceId) {
            $res['referenceId'] = $this->referenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['last7PvPercent'])) {
            $model->last7PvPercent = $map['last7PvPercent'];
        }
        if (isset($map['last7ScenePv'])) {
            $model->last7ScenePv = $map['last7ScenePv'];
        }
        if (isset($map['last7TaskPv'])) {
            $model->last7TaskPv = $map['last7TaskPv'];
        }
        if (isset($map['lastPvPercent'])) {
            $model->lastPvPercent = $map['lastPvPercent'];
        }
        if (isset($map['lastScenePv'])) {
            $model->lastScenePv = $map['lastScenePv'];
        }
        if (isset($map['lastTaskPv'])) {
            $model->lastTaskPv = $map['lastTaskPv'];
        }
        if (isset($map['referenceId'])) {
            $model->referenceId = $map['referenceId'];
        }

        return $model;
    }
}
