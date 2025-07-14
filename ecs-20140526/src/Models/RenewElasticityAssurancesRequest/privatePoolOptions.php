<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RenewElasticityAssurancesRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The IDs of elasticity assurances.
     *
     **Limits**: You can renew up to 20 elasticity assurances at a time.
     *
     * You can call the [DescribeElasticityAssurances](https://help.aliyun.com/document_detail/2679748.html) operation to query the elasticity assurances that you purchased.
     *
     * @var string[]
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            if (!empty($map['Id'])) {
                $model->id = $map['Id'];
            }
        }

        return $model;
    }
}
