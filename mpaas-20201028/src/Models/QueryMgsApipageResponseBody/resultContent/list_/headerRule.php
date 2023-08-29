<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApipageResponseBody\resultContent\list_;

use AlibabaCloud\Tea\Model;

class headerRule extends Model
{
    /**
     * @var string
     */
    public $headerKey;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'headerKey' => 'HeaderKey',
        'location'  => 'Location',
        'type'      => 'Type',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerKey) {
            $res['HeaderKey'] = $this->headerKey;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
     * @return headerRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderKey'])) {
            $model->headerKey = $map['HeaderKey'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
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
