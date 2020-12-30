<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeMixResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeMixResponseBody\result\parameter;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var parameter
     */
    public $parameter;
    protected $_name = [
        'gmtCreate'   => 'GmtCreate',
        'name'        => 'Name',
        'gmtModified' => 'GmtModified',
        'parameter'   => 'Parameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->parameter) {
            $res['Parameter'] = null !== $this->parameter ? $this->parameter->toMap() : null;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Parameter'])) {
            $model->parameter = parameter::fromMap($map['Parameter']);
        }

        return $model;
    }
}
