<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttachmentAttributesRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The ID of the private pool. Set the value to the ID of the elasticity assurance or capacity reservation that generates the private pool.
     *
     *   This parameter is required when `PrivatePoolOptions.MatchCriteria` is set to `Target`.
     *   This parameter must be empty when `PrivatePoolOptions.MatchCriteria` is set to `Open` or `None`.
     *
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $id;

    /**
     * @description The new type of private pool. Valid values:
     *
     *   Open: open private pool. The system matches the instance with an open private pool. If no matching open private pools exist, the system uses resources in the public pool to start the instance.
     *   Target: specified private pool. The system uses the capacity in a specified private pool to start the instance. If the specified private pool is unavailable, the instance cannot be started. You must use `PrivatePoolOptions.Id` to specify the ID of a private pool.
     *   None: no private pool. The capacity in private pools is not used to start the instance.
     *
     * This parameter is required.
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
