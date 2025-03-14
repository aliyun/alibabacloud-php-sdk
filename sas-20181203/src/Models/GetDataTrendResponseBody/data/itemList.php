<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDataTrendResponseBody\data;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @description The statistical values of the trend data.
     *
     * @var int[]
     */
    public $countList;

    /**
     * @description The type of the security data. Valid values:
     *
     *   **HC_NEW**: the number of new baseline risks.
     *   **HC_OPERATE**: the number of handled baseline risks.
     *   **VUL_NEW**: the number of new vulnerabilities.
     *   **VUL_OPERATE**: the number of handled vulnerabilities.
     *   **SUSP_NEW**: the number of new alerts.
     *   **SUSP_OPERATE**: the number of handled alerts.
     *
     * @example HC_NEW
     *
     * @var string
     */
    public $keyName;
    protected $_name = [
        'countList' => 'CountList',
        'keyName' => 'KeyName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->countList) {
            $res['CountList'] = $this->countList;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountList'])) {
            if (!empty($map['CountList'])) {
                $model->countList = $map['CountList'];
            }
        }
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        return $model;
    }
}
