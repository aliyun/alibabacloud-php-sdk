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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\header;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\taskRunInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Access was denied, message: No such namespace namespaces/mjp-test-default.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var header
     */
    public $header;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @example 3feb69ed02d9b1a17d0f1a942675d300
     *
     * @var string
     */
    public $taskId;

    /**
     * @var taskRunInfo
     */
    public $taskRunInfo;

    /**
     * @example SUCCESSED
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'header' => 'header',
        'payload' => 'payload',
        'taskId' => 'taskId',
        'taskRunInfo' => 'taskRunInfo',
        'taskStatus' => 'taskStatus',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->taskRunInfo) {
            $res['taskRunInfo'] = null !== $this->taskRunInfo ? $this->taskRunInfo->toMap() : null;
        }
        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }
        if (isset($map['payload'])) {
            $model->payload = payload::fromMap($map['payload']);
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['taskRunInfo'])) {
            $model->taskRunInfo = taskRunInfo::fromMap($map['taskRunInfo']);
        }
        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
