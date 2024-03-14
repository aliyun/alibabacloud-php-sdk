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
     * @example {\"SearchItem\":\"\",\"UserType\":\"buy\",\"IpVersion\":\"4\"}
     *
     * @var string
     */
    public $taskData;
    protected $_name = [
        'lang'     => 'Lang',
        'taskData' => 'TaskData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskData) {
            $res['TaskData'] = $this->taskData;
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

        return $model;
    }
}
