<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateDownloadTaskRequest extends Model
{
    /**
     * @description The language of the content within the response.
     *
     * Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The query condition of the download task.
     *
     * @example {\\"SearchItem\\":\\"\\",\\"UserType\\":\\"buy\\",\\"IpVersion\\":\\"4\\"}
     *
     * @var string
     */
    public $taskData;

    /**
     * @description The type of the task. For more information about task types, see the descriptions in the "DescribeDownloadTaskType" topic.
     *
     * @example InternetFirewallAsset
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The time zone of the time information in the downloaded file. The value must be an identifier of a time zone in the Internet Assigned Numbers Authority (IANA) database. The default value is Asia/Shanghai, which indicates UTC+8.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'lang' => 'Lang',
        'taskData' => 'TaskData',
        'taskType' => 'TaskType',
        'timeZone' => 'TimeZone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskData) {
            $res['TaskData'] = $this->taskData;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDownloadTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TaskData'])) {
            $model->taskData = $map['TaskData'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
