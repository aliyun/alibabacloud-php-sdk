<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody\list_;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The name of the detailed item.
     *
     * @example MD5
     *
     * @var string
     */
    public $name;

    /**
     * @description The name key of the detailed item.
     *
     * @example ${suspicious.mp.db.maliciousfilemd5}
     *
     * @var string
     */
    public $nameKey;

    /**
     * @description The type of the detailed item.
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the detailed item.
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'    => 'Name',
        'nameKey' => 'NameKey',
        'type'    => 'Type',
        'value'   => 'Value',
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
        if (null !== $this->nameKey) {
            $res['NameKey'] = $this->nameKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameKey'])) {
            $model->nameKey = $map['NameKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
