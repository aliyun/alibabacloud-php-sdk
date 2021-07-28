<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup\backupDownloadLinkByDB;

use AlibabaCloud\Tea\Model;

class backupDownloadLinkByDB extends Model
{
    /**
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @var string
     */
    public $dataBase;

    /**
     * @var string
     */
    public $downloadLink;
    protected $_name = [
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'dataBase'             => 'DataBase',
        'downloadLink'         => 'DownloadLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }
        if (null !== $this->dataBase) {
            $res['DataBase'] = $this->dataBase;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupDownloadLinkByDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }
        if (isset($map['DataBase'])) {
            $model->dataBase = $map['DataBase'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }

        return $model;
    }
}
