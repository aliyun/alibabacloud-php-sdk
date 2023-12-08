<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes\checkDetails;
use AlibabaCloud\Tea\Model;

class subTypes extends Model
{
    /**
     * @description The alias of the baseline subtype.
     *
     * @example Redis unauthorized access high exploit vulnerability risk
     *
     * @var string
     */
    public $alias;

    /**
     * @description The baseline subtype permission flag of the current user version. Valid values:
     *
     * - **true**: Have access
     * - **false**: No permissions
     * @example true
     *
     * @var bool
     */
    public $authFlag;

    /**
     * @description An array that consists of the check details about the baseline subtype.
     *
     * @var checkDetails[]
     */
    public $checkDetails;

    /**
     * @description The operating system type of the server. Valid values:
     *
     * - **windows**
     * - **linux**
     * @example linux
     *
     * @var string
     */
    public $supportedOs;

    /**
     * @description The name of the baseline subtype.
     *
     * @example hc_exploit_redis
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias'        => 'Alias',
        'authFlag'     => 'AuthFlag',
        'checkDetails' => 'CheckDetails',
        'supportedOs'  => 'SupportedOs',
        'typeName'     => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->authFlag) {
            $res['AuthFlag'] = $this->authFlag;
        }
        if (null !== $this->checkDetails) {
            $res['CheckDetails'] = [];
            if (null !== $this->checkDetails && \is_array($this->checkDetails)) {
                $n = 0;
                foreach ($this->checkDetails as $item) {
                    $res['CheckDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportedOs) {
            $res['SupportedOs'] = $this->supportedOs;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['AuthFlag'])) {
            $model->authFlag = $map['AuthFlag'];
        }
        if (isset($map['CheckDetails'])) {
            if (!empty($map['CheckDetails'])) {
                $model->checkDetails = [];
                $n                   = 0;
                foreach ($map['CheckDetails'] as $item) {
                    $model->checkDetails[$n++] = null !== $item ? checkDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportedOs'])) {
            $model->supportedOs = $map['SupportedOs'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
