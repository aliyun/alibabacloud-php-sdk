<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponseBody\filterAttributes;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponseBody\filterAttributes\filterAttribute\supportOperations;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponseBody\filterAttributes\filterAttribute\values;
use AlibabaCloud\Tea\Model;

class filterAttribute extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var supportOperations
     */
    public $supportOperations;

    /**
     * @var string
     */
    public $type;

    /**
     * @var values
     */
    public $values;
    protected $_name = [
        'name'              => 'Name',
        'supportOperations' => 'SupportOperations',
        'type'              => 'Type',
        'values'            => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->supportOperations) {
            $res['SupportOperations'] = null !== $this->supportOperations ? $this->supportOperations->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SupportOperations'])) {
            $model->supportOperations = supportOperations::fromMap($map['SupportOperations']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }

        return $model;
    }
}
