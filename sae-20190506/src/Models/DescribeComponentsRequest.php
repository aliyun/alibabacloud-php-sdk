<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeComponentsRequest extends Model
{
    /**
     * @description TOMCAT
     *
     * @example d700e680-aa4d-4ec1-afc2-6566b5ff****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the request.
     *
     * @example TOMCAT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
