<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetVulStatisticsRequest extends Model
{
    /**
     * @description The ID of the asset group. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     * @example 9997897
     *
     * @var string
     */
    public $groupIdList;

    /**
     * @description The source IP address of the request.
     *
     * @example 10.12.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the vulnerability whose statistics you want to query. Separate multiple types with commas (,). Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **emg**: urgent vulnerability
     *   **app**: vulnerability detected by using a web scanner
     *   **sca**: vulnerability detected based on software component analysis
     *
     * This parameter is required.
     * @example cve
     *
     * @var string
     */
    public $typeList;
    protected $_name = [
        'groupIdList' => 'GroupIdList',
        'sourceIp'    => 'SourceIp',
        'typeList'    => 'TypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = $this->typeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVulStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIdList'])) {
            $model->groupIdList = $map['GroupIdList'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TypeList'])) {
            $model->typeList = $map['TypeList'];
        }

        return $model;
    }
}
