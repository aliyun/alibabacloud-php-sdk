<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupPolicyShrinkRequest extends Model
{
    /**
     * @description The name of the anti-ransomware policy.
     *
     * This parameter is required.
     * @example ServerBackUpPolicy01
     *
     * @var string
     */
    public $name;

    /**
     * @description *   **IsDefault**: the type of the anti-ransomware policy. Valid values:
     *
     *   **1**: recommended policy
     *   **0**: custom policy
     *
     *   **Include**: the format of the files that you want to protect. If you want to protect the files in all formats, set this field to [].
     *
     *   **Source**: the directory that you want to protect. If you want to protect all directories, set this field to [].
     *
     *   **ExcludeSystemPath**: specifies whether to exclude a specific directory from the anti-ransomware policy. If you want to exclude a directory, set this field to **true**. If you do not want to exclude a directory, leave this field empty.
     *
     *   **Exclude**: the directory that you want to exclude from the anti-ransomware policy. If you do not want to exclude a directory, set this field to [].
     *
     *   **Schedule**: the start time and interval of a data backup task. We recommend that you specify a start time that begins during off-peak hours but does not start on the hour. Examples:
     *
     *   If you set this field to I|1583216092|P21D, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of three weeks.
     *   If you set this field to I|1583216092|PT24H, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of 24 hours.
     *
     *   **Retention**: the period during which backup data is retained. Unit: days. If you set this field to 7, backup data is retained for a week. If you set this field to 365, backup data is retained for a year. If you set this field to -1, backup data is permanently retained.
     *
     *   **SpeedLimiter**: the limit on the network bandwidth for data backup tasks. If you set this field to 0:24:30720, the maximum bandwidth for a data backup task is 30 MB/s from 00:00 to 24:00.
     *
     *   **UseVss**: specifies whether to enable the VSS feature. The feature is available only for Windows servers. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * This parameter is required.
     * @example "{"IsDefault":1,"Include":[],"Source":[],"Schedule":"I|1648061040|PT24H","Retention":7,"SpeedLimiter":"","ExcludeSystemPath":true,"Exclude":["/bin/","/usr/bin/","/sbin/","/boot/","/proc/","/sys/","/srv/","/lib/","/selinux/","/usr/sbin/","/run/","/lib32/","/lib64/","/lost+found/","/var/lib/kubelet/","/var/lib/ntp/proc","/var/lib/container","Windows","Python27","Program Files (x86)","Program Files","Boot","$RECYCLE.BIN","System Volume Information","Users\\Administrator\\NTUSER.DAT*","ProgramData","pagefile.sys","Users\\Default\\NTUSER.DAT*","Users\\Administrator\\ntuser.*"],"UseVss":true}"
     *
     * @var string
     */
    public $policyShrink;

    /**
     * @description The region ID of the server that is not deployed on Alibaba Cloud.
     *
     * >  We recommend that you specify the ID of the supported region that is the nearest to the location of the server. You can call the [DescribeSupportRegion](~~DescribeSupportRegion~~) operation to query the supported regions of the anti-ransomware feature.
     * @example ch-hangzhou
     *
     * @var string
     */
    public $policyRegionId;

    /**
     * @description The version of the anti-ransomware policy. Set the value to **2.0.0**.
     *
     * This parameter is required.
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @description The UUIDs of the servers that you want to protect.
     *
     * This parameter is required.
     * @example ["3bb30859-b3b5-4f28-868f-b0892c98****", "3bb30859-b3b5-4f28-868f-b0892c98****"]
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'name'           => 'Name',
        'policyShrink'   => 'Policy',
        'policyRegionId' => 'PolicyRegionId',
        'policyVersion'  => 'PolicyVersion',
        'uuidList'       => 'UuidList',
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
        if (null !== $this->policyShrink) {
            $res['Policy'] = $this->policyShrink;
        }
        if (null !== $this->policyRegionId) {
            $res['PolicyRegionId'] = $this->policyRegionId;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policyShrink = $map['Policy'];
        }
        if (isset($map['PolicyRegionId'])) {
            $model->policyRegionId = $map['PolicyRegionId'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
