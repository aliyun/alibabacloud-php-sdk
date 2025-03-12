<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DeleteLayer4RuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {"InstanceId":"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc","Protocol":"tcp","FrontendPort":80}
     *
     * @var string
     */
    public $listeners;
    protected $_name = [
        'listeners' => 'Listeners',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLayer4RuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        return $model;
    }
}
