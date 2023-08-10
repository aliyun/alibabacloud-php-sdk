<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class GetFunctionInstanceRequest extends Model
{
    /**
     * @description Specifies the richness of returned information. Valid values:
     *
     *   simple: displays only the basic information.
     *   normal: displays information such as createParameters and cron. This is the default value.
     *   detail: returns the details of the training task.
     *
     * @example detail
     *
     * @var string
     */
    public $output;
    protected $_name = [
        'output' => 'output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }

        return $model;
    }
}
