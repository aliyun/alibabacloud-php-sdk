<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponseBody;

use AlibabaCloud\Tea\Model;

class attack extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'appCode' => 'AppCode',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
