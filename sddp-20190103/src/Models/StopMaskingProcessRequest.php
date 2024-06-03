<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class StopMaskingProcessRequest extends Model
{
    /**
     * @description The unique ID of the de-identification task. You can query the task ID by calling the [DescribeDataMaskingTasks](~~DescribeDataMaskingTasks~~) operation.
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh_cn**: Simplified Chinese (default)
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'id'   => 'Id',
        'lang' => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopMaskingProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
