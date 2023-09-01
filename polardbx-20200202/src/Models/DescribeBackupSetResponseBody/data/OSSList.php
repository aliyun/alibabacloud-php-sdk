<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetResponseBody\data;

use AlibabaCloud\Tea\Model;

class OSSList extends Model
{
    /**
     * @example hins3084_data_20220418110623_qp.xb
     *
     * @var string
     */
    public $backupSetFile;

    /**
     * @example https://pre-rdsbak-cn-xxx.oss-cn-beijing.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?OSSAccessKeyId=LTAI5tJEmRFdJ8aBPDR7****&Expires=1650441697&dd=7KJzkUSbXf6dwy
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @example http://pre-rdsbak-cn-beijing.oss-cn-beijing-internal.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?
     *
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @example 2022-04-20T08:01:37Z
     *
     * @var string
     */
    public $linkExpiredTime;
    protected $_name = [
        'backupSetFile'        => 'BackupSetFile',
        'downloadLink'         => 'DownloadLink',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetFile) {
            $res['BackupSetFile'] = $this->backupSetFile;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetFile'])) {
            $model->backupSetFile = $map['BackupSetFile'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }

        return $model;
    }
}
