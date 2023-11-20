<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckTypesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example data_integrity
     *
     * @var string
     */
    public $checkType;

    /**
     * @example Data Integrity
     *
     * @var string
     */
    public $checkTypeDisName;
    protected $_name = [
        'checkType'        => 'CheckType',
        'checkTypeDisName' => 'CheckTypeDisName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->checkTypeDisName) {
            $res['CheckTypeDisName'] = $this->checkTypeDisName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['CheckTypeDisName'])) {
            $model->checkTypeDisName = $map['CheckTypeDisName'];
        }

        return $model;
    }
}
