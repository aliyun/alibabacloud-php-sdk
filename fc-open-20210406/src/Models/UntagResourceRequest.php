<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UntagResourceRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags. This parameter takes effect only when no tag key is specified. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the resource.
     *
     * > You can use the value of this parameter to query the information about the resource, such as the account, service, and region information of the resource. You can manage tags only for services for top level resources.
     * @example acs:fc:cn-shanghai:188077086902****:services/demo
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @description The keys of the tags that you want to remove.
     *
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all'         => 'all',
        'resourceArn' => 'resourceArn',
        'tagKeys'     => 'tagKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->resourceArn) {
            $res['resourceArn'] = $this->resourceArn;
        }
        if (null !== $this->tagKeys) {
            $res['tagKeys'] = $this->tagKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['resourceArn'])) {
            $model->resourceArn = $map['resourceArn'];
        }
        if (isset($map['tagKeys'])) {
            if (!empty($map['tagKeys'])) {
                $model->tagKeys = $map['tagKeys'];
            }
        }

        return $model;
    }
}
