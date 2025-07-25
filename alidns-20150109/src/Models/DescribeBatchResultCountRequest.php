<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultCountRequest extends Model
{
    /**
     * @description The type of the batch operation. Valid values:
     *
     *   **DOMAIN_ADD**: adds domain names in batches.
     *   **DOMAIN_DEL**: deletes domain names in batches.
     *   **RR_ADD**: adds Domain Name System (DNS) records in batches.
     *   **RR_DEL**: deletes DNS records in batches.
     *
     * >  If you do not specify this parameter, filtering is not required.
     *
     * @example DOMAIN_ADD
     *
     * @var string
     */
    public $batchType;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The task ID.
     *
     * >  If you specify TaskId, the execution result of the specified task is returned. If you do not specify TaskId, the execution result of the last task is returned.
     *
     * @example 123456
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchType' => 'BatchType',
        'lang' => 'Lang',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchResultCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
