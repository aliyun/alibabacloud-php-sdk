<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody\policies;
use AlibabaCloud\Tea\Model;

class DescribeBackupPoliciesResponseBody extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The configurations of the anti-ransomware policy. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **IsDefault**: the type of the anti-ransomware policy. Valid values:
     *
     *   **1**: recommended policy
     *   **0**: custom policy
     *
     *   **Include**: the format of the files that are protected. If the value of this field is \[], all formats of files are protected.
     *
     *   **Source**: the directory that is protected. If the value of this field is \[], all directories are protected.
     *
     *   **ExcludeSystemPath**: indicates whether a specified directory is excluded from the anti-ransomware policy. If the value of this field is **true**, the directory is excluded. If this field is left empty, no directories are excluded.
     *
     *   **Exclude**: the directory that is excluded from the anti-ransomware policy. If no directory is specified, the value of this field is \[].
     *
     *   **Schedule**: the start time and interval of a data backup task. A start time that begins during off-peak hours but does not start on the hour is recommended. Examples:
     *
     *   If the value of this field is I|1583216092|P21D, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of three weeks.
     *   If the value of this field is I|1583216092|PT24H, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of 24 hours.
     *
     *   **Retention**: the period during which backup data is retained. Unit: days. If the value of this field is 7, backup data is retained for a week. If the value of this field is 365, backup data is retained for a year. If the value of this field is -1, backup data is permanently retained.
     *
     *   **SpeedLimiter**: the limit on the network bandwidth for data backup tasks. If the value of this field is 0:24:30720, the maximum bandwidth for a data backup task is 30 MB/s from 00:00 to 24:00.
     *
     *   **UseVss**: indicates whether the VSS feature is enabled. The feature is available only for Windows servers. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  The VSS feature is available only if you create the anti-ransomware policy for Windows servers. After you enable the feature, the number of backup failures due to running processes is significantly reduced. We recommend that you enable the VSS feature. After you enable the feature, the data of disks that are in the exFAT and FAT32 formats cannot be backed up.
     * @var policies[]
     */
    public $policies;

    /**
     * @description The total number of anti-ransomware policies returned.
     *
     * @example BE120DAB-F4E7-4C53-ADC3-A97578ABF384
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'  => 'PageInfo',
        'policies'  => 'Policies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
