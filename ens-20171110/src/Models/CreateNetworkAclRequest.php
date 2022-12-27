<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkAclRequest extends Model
{
    /**
     * @example This is my NetworkAcl.
     *
     * @var string
     */
    public $description;

    /**
     * @example acl-1
     *
     * @var string
     */
    public $networkAclName;
    protected $_name = [
        'description'    => 'Description',
        'networkAclName' => 'NetworkAclName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkAclName) {
            $res['NetworkAclName'] = $this->networkAclName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkAclName'])) {
            $model->networkAclName = $map['NetworkAclName'];
        }

        return $model;
    }
}
