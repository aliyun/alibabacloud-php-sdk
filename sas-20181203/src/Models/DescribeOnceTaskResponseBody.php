<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody\taskManageResponseList;
use AlibabaCloud\Tea\Model;

class DescribeOnceTaskResponseBody extends Model
{
    /**
     * @description An array that consists of the tasks.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The execution details of the task. The value of this parameter is in the JSON format.
     *
     *   **causeCode**: the returned code for the cause
     *   **causeMsg**: the returned information for the cause
     *   **resCode**: the returned code of troubleshooting
     *   **resMsg**: the returned information about troubleshooting
     *   **problemType**: the type of the issue
     *   **dispatchType**: the task delivery method
     *   **uuid**: the UUID of the server
     *   **instanceId**: the instance ID of the server
     *   **internetIp**: the public IP address of the server
     *   **intranetIp**: the private IP address of the server
     *   **instanceName**: the instance name of the server
     *   **url**: the download link of the troubleshooting log
     *
     * @var taskManageResponseList[]
     */
    public $taskManageResponseList;
    protected $_name = [
        'pageInfo'               => 'PageInfo',
        'requestId'              => 'RequestId',
        'taskManageResponseList' => 'TaskManageResponseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskManageResponseList) {
            $res['TaskManageResponseList'] = [];
            if (null !== $this->taskManageResponseList && \is_array($this->taskManageResponseList)) {
                $n = 0;
                foreach ($this->taskManageResponseList as $item) {
                    $res['TaskManageResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOnceTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskManageResponseList'])) {
            if (!empty($map['TaskManageResponseList'])) {
                $model->taskManageResponseList = [];
                $n                             = 0;
                foreach ($map['TaskManageResponseList'] as $item) {
                    $model->taskManageResponseList[$n++] = null !== $item ? taskManageResponseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
