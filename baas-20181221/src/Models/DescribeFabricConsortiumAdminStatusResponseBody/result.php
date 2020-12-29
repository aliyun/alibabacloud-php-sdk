<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumAdminStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var bool
     */
    public $consortiumAdministrator;
    protected $_name = [
        'consortiumId'            => 'ConsortiumId',
        'consortiumAdministrator' => 'ConsortiumAdministrator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->consortiumAdministrator) {
            $res['ConsortiumAdministrator'] = $this->consortiumAdministrator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumAdministrator'])) {
            $model->consortiumAdministrator = $map['ConsortiumAdministrator'];
        }

        return $model;
    }
}
