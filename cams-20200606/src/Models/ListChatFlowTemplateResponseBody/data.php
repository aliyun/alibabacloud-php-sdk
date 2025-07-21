<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatFlowTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Content of the returned data.
     *
     * @example 无
     *
     * @var mixed[]
     */
    public $response;
    protected $_name = [
        'response' => 'Response',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->response) {
            $res['Response'] = $this->response;
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
        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }

        return $model;
    }
}
