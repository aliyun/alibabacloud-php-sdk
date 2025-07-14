<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RenewElasticityAssurancesResponseBody;

use AlibabaCloud\Tea\Model;

class privatePoolOptionsIdSet extends Model
{
    /**
     * @var string[]
     */
    public $privatePoolOptionsId;
    protected $_name = [
        'privatePoolOptionsId' => 'PrivatePoolOptionsId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolOptionsIdSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivatePoolOptionsId'])) {
            if (!empty($map['PrivatePoolOptionsId'])) {
                $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
            }
        }

        return $model;
    }
}
