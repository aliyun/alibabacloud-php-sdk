<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRamPolicyExportTasksResponseBody\ramPolicyExportTasks;

class ListRamPolicyExportTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var ramPolicyExportTasks[]
     */
    public $ramPolicyExportTasks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'ramPolicyExportTasks' => 'ramPolicyExportTasks',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ramPolicyExportTasks)) {
            Model::validateArray($this->ramPolicyExportTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->ramPolicyExportTasks) {
            if (\is_array($this->ramPolicyExportTasks)) {
                $res['ramPolicyExportTasks'] = [];
                $n1 = 0;
                foreach ($this->ramPolicyExportTasks as $item1) {
                    $res['ramPolicyExportTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['ramPolicyExportTasks'])) {
            if (!empty($map['ramPolicyExportTasks'])) {
                $model->ramPolicyExportTasks = [];
                $n1 = 0;
                foreach ($map['ramPolicyExportTasks'] as $item1) {
                    $model->ramPolicyExportTasks[$n1++] = ramPolicyExportTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
