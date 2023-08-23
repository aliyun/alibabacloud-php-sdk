<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The ID of the private pool. The ID of a private pool is the same as the ID of the elasticity assurance or capacity reservation for which the private pool is generated.
     *
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the private pool that you want to use to start instances. A private pool is generated when an elasticity assurance or a capacity reservation takes effect. You can select a private pool for Auto Scaling to start instances. Valid values:
     *
     *   Open: open private pool. Auto Scaling selects a matching open private pool to start instances. If no matching open private pools exist, Auto Scaling uses the resources in the public pool to start instances. In this case, you do not need to specify PrivatePoolOptions.Id.
     *   Target: specified private pool. Auto Scaling uses the resources in the specified private pool to start instances. If the private pool is unavailable, Auto Scaling cannot start the instances. If you set this parameter to Target, you must specify PrivatePoolOptions.Id.
     *   None: no private pool: Auto Scaling does not use the resources in private pools to start instances.
     *
     * @example Open
     *
     * @var string
     */
    public $matchCriteria;
    protected $_name = [
        'id'            => 'Id',
        'matchCriteria' => 'MatchCriteria',
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
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
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
            $model->id = $map['Id'];
        }
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }

        return $model;
    }
}
