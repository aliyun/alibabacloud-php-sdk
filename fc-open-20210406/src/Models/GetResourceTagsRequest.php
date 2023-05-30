<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTagsRequest extends Model
{
    /**
     * @description The ARN of the resource.
     * > **Note:** You can use the value of this parameter to query the information about the resource, such as the account, service, and region information of the resource.
     * @example acs:fc:cn-shanghai:188077086902****:services/demo
     *
     * @var string
     */
    public $resourceArn;
    protected $_name = [
        'resourceArn' => 'resourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceArn) {
            $res['resourceArn'] = $this->resourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceArn'])) {
            $model->resourceArn = $map['resourceArn'];
        }

        return $model;
    }
}
