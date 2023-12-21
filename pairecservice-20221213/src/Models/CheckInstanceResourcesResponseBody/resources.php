<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\CheckInstanceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example OSS
     *
     * @var string
     */
    public $type;

    /**
     * @example bucket-test-123
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'status' => 'Status',
        'type'   => 'Type',
        'uri'    => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
