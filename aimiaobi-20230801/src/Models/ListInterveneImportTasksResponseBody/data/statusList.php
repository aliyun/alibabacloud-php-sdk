<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneImportTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class statusList extends Model
{
    /**
     * @example Success
     *
     * @var string
     */
    public $msg;

    /**
     * @example 5
     *
     * @var int
     */
    public $percentage;

    /**
     * @example Success
     *
     * @var int
     */
    public $status;

    /**
     * @example 4854
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 12344454
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'msg' => 'Msg',
        'percentage' => 'Percentage',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
