<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetResponseBody\data;

use AlibabaCloud\Dara\Model;

class OSSList extends Model
{
    /**
     * @var string
     */
    public $backupSetFile;
    /**
     * @var string
     */
    public $downloadLink;
    /**
     * @var string
     */
    public $intranetDownloadLink;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
