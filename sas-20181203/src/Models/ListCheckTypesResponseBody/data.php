<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckTypesResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckTypesResponseBody\data\checkDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var checkDetails[]
     */
    public $checkDetails;

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
        'checkDetails'     => 'CheckDetails',
        'checkType'        => 'CheckType',
        'checkTypeDisName' => 'CheckTypeDisName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDetails) {
            $res['CheckDetails'] = [];
            if (null !== $this->checkDetails && \is_array($this->checkDetails)) {
                $n = 0;
                foreach ($this->checkDetails as $item) {
                    $res['CheckDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (isset($map['CheckDetails'])) {
            if (!empty($map['CheckDetails'])) {
                $model->checkDetails = [];
                $n                   = 0;
                foreach ($map['CheckDetails'] as $item) {
                    $model->checkDetails[$n++] = null !== $item ? checkDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['CheckTypeDisName'])) {
            $model->checkTypeDisName = $map['CheckTypeDisName'];
        }

        return $model;
    }
}
